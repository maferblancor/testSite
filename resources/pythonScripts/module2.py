#!/usr/bin/env python
# coding: utf-8

# In[25]:


from sqlalchemy import create_engine
import pandas as pd
import matplotlib.pyplot as plt


# In[2]:


engine = create_engine(
      "mysql://datatest0:00000000@localhost/datatest0?host=db4free.net?port=3306")

con = engine.connect()


# In[30]:


querys = ["select MARCA, count(MARCA) AS NUM_MARCAS from data group by MARCA having count(MARCA)>1 ", 
          "select TIPO_DE_KPI, count(MARCA) as MARCAS from data group by TIPO_DE_KPI having count(TIPO_DE_KPI)>1",
          "select TIPO_DE_KPI, marca, count(marca) as marcas from data GROUP by TIPO_DE_KPI, marca",
          "select MARCA, TIPO_DE_KPI,INVERSION_USD,KPI_CONTRATADO,REAL_CUMPLIDO, (INVERSION_USD/KPI_CONTRATADO-INVERSION_USD/REAL_CUMPLIDO)*100 AS desempeno_percent from data WHERE KPI_CONTRATADO > 1 AND REAL_CUMPLIDO > 0 UNION ALL select MARCA, TIPO_DE_KPI,INVERSION_USD,KPI_CONTRATADO,REAL_CUMPLIDO,(INVERSION_USD/KPI_CONTRATADO-INVERSION_USD/REAL_CUMPLIDO)/100 AS desempeno from data WHERE KPI_CONTRATADO < 1 AND KPI_CONTRATADO > 0 AND REAL_CUMPLIDO > 0 order by marca, TIPO_DE_KPI",
          "select DISTINCT d.proveedor, d.marca, d.tipo_de_kpi, d.FECHA, d.INVERSION_USD from ( select MAX(INVERSION_USD)  as max_inv,fecha from data GROUP by FECHA ) as x inner join data as d on d.INVERSION_USD = x.max_inv and x.fecha = d.FECHA"
         ]


# In[35]:


dataquery=[]
for query in querys:
    dataquery.append(pd.read_sql_query(query,con))


# In[38]:


dataquery[0].MARCA


# In[45]:


plt.figure() # Crear una figura
plt.plot(dataquery[0].MARCA,dataquery[0].NUM_MARCAS , 'g-*')
plt.legend(['MARCA'])


# In[46]:


con.close()

