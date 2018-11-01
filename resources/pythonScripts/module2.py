
# coding: utf-8

# In[30]:

from sqlalchemy import create_engine
import pandas as pd
import matplotlib.pyplot as plt
import numpy as np


# In[31]:


def plot_frames(x,y,frame,frames,plt,axes,val1, val2, val3,labely,labelx, p ='p'):     
    my_xticks = list(set(frames[frame][val1]))
    plt.xticks(range(0,6,1), my_xticks)
    x_ = frames[frame][val1]
    y_ = frames[frame][val2]
    axes[x,y].set(title=frames[frame][val3][0:1].to_string(index = False))
    axes[x,y].plot(x_,y_,'b '+p)
    axes[x,y].grid(which= 'both')
    axes[x,y].set_ylabel(labely)
    axes[x,y].set_xlabel(labelx)
    
    


# In[32]:

engine = create_engine(
      "mysql://datatest0:00000000@localhost/datatest0?host=db4free.net?port=3306")

con = engine.connect()


# In[41]:

querys = ["SELECT COUNT(DISTINCT marca) AS cant_marcas FROM data",
          "SELECT marca, count(marca) AS num_marcas FROM data GROUP BY marca", 
          "SELECT tipo_de_kpi, COUNT(marca) as marcas FROM data GROUP BY tipo_de_kpi",
          "select tipo_de_kpi, marca, count(marca) as num_marcas from data GROUP by TIPO_DE_KPI, marca",
          "select formato, MARCA, TIPO_DE_KPI,INVERSION_USD,KPI_CONTRATADO,REAL_CUMPLIDO, (INVERSION_USD/KPI_CONTRATADO-INVERSION_USD/REAL_CUMPLIDO)*100 AS desempeno_percent from data WHERE KPI_CONTRATADO > 1 AND REAL_CUMPLIDO > 0 UNION ALL select formato,MARCA, TIPO_DE_KPI,INVERSION_USD,KPI_CONTRATADO,REAL_CUMPLIDO,(INVERSION_USD/KPI_CONTRATADO-INVERSION_USD/REAL_CUMPLIDO)/100 AS desempeno from data WHERE KPI_CONTRATADO < 1 AND KPI_CONTRATADO > 0 AND REAL_CUMPLIDO > 0 order by formato",
          "select DISTINCT d.proveedor, d.marca, d.formato, d.FECHA, d.INVERSION_USD from ( select MAX(INVERSION_USD)  as max_inv,fecha from data GROUP by FECHA ) as x inner join data as d on d.INVERSION_USD = x.max_inv and x.fecha = d.FECHA"
         ]


# In[42]:

dataquery=[]
for query in querys:
    dataquery.append(pd.read_sql_query(query,con))


# ### Marcas disponibles en el informe y cantidad de registros por marca
# 
# * Consulta marcas disponibles en el informe: *SELECT COUNT(DISTINCT marca) AS cant_marcas FROM data*
# 
# La data tiene un total de:
# 
# 
#  

# In[43]:

print (dataquery[0].to_string(index=False))


# 
# 
# * Consulta cantidad de registros por marca: *SELECT marca, count(marca) AS num_marcas FROM data GROUP BY marca*
# 
# La catidad de registros por marca se muestra en la tabla siguiente: 
# 
# 
#  

# In[44]:

print (dataquery[1].to_string(index=False))


# Y su puede ser mejor observada en el grafico siguiente:

# In[45]:

plt.figure() # Crear una figura
plt.plot(dataquery[1].marca,dataquery[1].num_marcas , 'b-*')
plt.legend(['Cantidad'])
plt.xlabel('Marcas')
plt.ylabel('Cantidad de registros')
plt.title('Cantidad de registros por marcas')
plt.show()


# ### Total de marcas por KPI
# 
# * Consulta de resultados de registros por KPI: *SELECT tipo_de_kpi, COUNT(marca) as marcas FROM data GROUP BY tipo_de_kpi*
# 
# Las cantidades marcas por cada tipo de KPI son:

# In[46]:

print (list(dataquery[1].marca))


# In[47]:

impr = dataquery[2].tipo_de_kpi
vol = dataquery[2].marcas
#expl =(0, 0.05, 0.1, 0)
plt.pie(vol, labels=impr, autopct='%1.1f%%',radius=1.5, shadow=True)
plt.title("Registros por KPI",loc='left')
plt.show()
#plt.legend(loc=10)


# ### Resultados de cada marca por KPI
# 
# * Consulta de total de registros por marca para cada KPI: *select tipo_de_kpi, marca, count(marca) as num_marcas from data GROUP by TIPO_DE_KPI, marca*
# 
# Las cantidades de registros por cada tipo de KPI son:

# In[48]:

frames = []
for it in set(dataquery[3].tipo_de_kpi):
    frames.append(dataquery[3][dataquery[3]['tipo_de_kpi'] == it])
    
fig, axes = plt.subplots(nrows=3, ncols=3)
plt.subplots_adjust(top=2, bottom=0.09, left=0.10, right=2, hspace=0.5,
                    wspace=0.35) 

plot_frames(0,0,0,frames,plt,axes,'marca','num_marcas','tipo_de_kpi','Registros','Marcas')
plot_frames(0,1,1,frames,plt,axes,'marca','num_marcas','tipo_de_kpi','Registros','Marcas')
plot_frames(0,2,2,frames,plt,axes,'marca','num_marcas','tipo_de_kpi','Registros','Marcas')
plot_frames(1,0,3,frames,plt,axes,'marca','num_marcas','tipo_de_kpi','Registros','Marcas')
plot_frames(1,1,4,frames,plt,axes,'marca','num_marcas','tipo_de_kpi','Registros','Marcas')
plot_frames(1,2,5,frames,plt,axes,'marca','num_marcas','tipo_de_kpi','Registros','Marcas')
plot_frames(2,0,6,frames,plt,axes,'marca','num_marcas','tipo_de_kpi','Registros','Marcas')
plot_frames(2,1,7,frames,plt,axes,'marca','num_marcas','tipo_de_kpi','Registros','Marcas')
plot_frames(2,2,8,frames,plt,axes,'marca','num_marcas','tipo_de_kpi','Registros','Marcas')



# Estos valores estan divididos por KPI y los puntos resultados son el numero de registros en la base de datos que pertenecen a una respectiva marca.
# 
# Los datos anteriores se encuentran en la tabla siguiente

# In[13]:

dataquery[3]


# ### % de variación entre costos planeado y costo real 
# 
# * Variacion de costos planeados y costo real para cada formato por tipo de kpi:
# 
# *select MARCA, TIPO_DE_KPI,INVERSION_USD,KPI_CONTRATADO,REAL_CUMPLIDO, (INVERSION_USD/KPI_CONTRATADO-INVERSION_USD/REAL_CUMPLIDO)*100 AS desempeno_percent from data WHERE KPI_CONTRATADO > 1 AND REAL_CUMPLIDO > 0 UNION ALL select MARCA, TIPO_DE_KPI,INVERSION_USD,KPI_CONTRATADO,REAL_CUMPLIDO,(INVERSION_USD/KPI_CONTRATADO-INVERSION_USD/REAL_CUMPLIDO)/100 AS desempeno from data WHERE KPI_CONTRATADO < 1 AND KPI_CONTRATADO > 0 AND REAL_CUMPLIDO > 0 order by marca, TIPO_DE_KPI
# 
# Aclaratoria:
# 
# La pregunta especifica: Desempeño por formato, % de variación entre costos planeado y costo real (costo planeado = inversión Usd/KPI planeado) 
# 
# Pero considerando que: 
# * No existe un valor en el formato de entrada para el costo real 
# 
# Se asume:
# 
# * El costo real es el valor entre la inversion en usd y el real cumplido. 
# * La variacion es la diferencia entre el costo real y el costo planeado.
#  
# 
# 
# 

# In[99]:

frames2 = []
for it in set(dataquery[4]['formato']):
    frames2.append(dataquery[4][dataquery[4]['formato'] == it])

fig, axes = plt.subplots(nrows=8, ncols=2)
plt.subplots_adjust(top=5, bottom=0.09, left=0.10, right=2.6, hspace=0.5,
                    wspace=0.2) 

plot_frames(0,0,0,frames2,plt,axes,'TIPO_DE_KPI','desempeno_percent','formato', '% desempeno', 'Tipo de KPI','.')
plot_frames(0,1,1,frames2,plt,axes,'TIPO_DE_KPI','desempeno_percent','formato', '% desempeno', 'Tipo de KPI','.')
plot_frames(1,0,2,frames2,plt,axes,'TIPO_DE_KPI','desempeno_percent','formato', '% desempeno', 'Tipo de KPI','.')
plot_frames(1,1,3,frames2,plt,axes,'TIPO_DE_KPI','desempeno_percent','formato', '% desempeno', 'Tipo de KPI','.')
plot_frames(2,0,4,frames2,plt,axes,'TIPO_DE_KPI','desempeno_percent','formato', '% desempeno', 'Tipo de KPI','.')
plot_frames(2,1,5,frames2,plt,axes,'TIPO_DE_KPI','desempeno_percent','formato', '% desempeno', 'Tipo de KPI','.')
plot_frames(3,0,6,frames2,plt,axes,'TIPO_DE_KPI','desempeno_percent','formato', '% desempeno', 'Tipo de KPI','.')
plot_frames(3,1,7,frames2,plt,axes,'TIPO_DE_KPI','desempeno_percent','formato', '% desempeno', 'Tipo de KPI','.')
plot_frames(4,0,8,frames2,plt,axes,'TIPO_DE_KPI','desempeno_percent','formato', '% desempeno', 'Tipo de KPI','.')
plot_frames(4,1,0,frames2,plt,axes,'TIPO_DE_KPI','desempeno_percent','formato', '% desempeno', 'Tipo de KPI','.')
plot_frames(5,0,10,frames2,plt,axes,'TIPO_DE_KPI','desempeno_percent','formato', '% desempeno', 'Tipo de KPI','.')
plot_frames(5,1,11,frames2,plt,axes,'TIPO_DE_KPI','desempeno_percent','formato', '% desempeno', 'Tipo de KPI','.')
plot_frames(6,0,12,frames2,plt,axes,'TIPO_DE_KPI','desempeno_percent','formato', '% desempeno', 'Tipo de KPI','.')
plot_frames(6,1,13,frames2,plt,axes,'TIPO_DE_KPI','desempeno_percent','formato', '% desempeno', 'Tipo de KPI','.')
plot_frames(7,0,14,frames2,plt,axes,'TIPO_DE_KPI','desempeno_percent','formato', '% desempeno', 'Tipo de KPI','.')
plt.delaxes(axes[7,1])
plt.show()



# Los valores estan divididos por formato y los puntos resaltados son el valor porcentual de variacion entre el costo planeado y el costo real para todos los registros de la data que tienen ciertos valores de KPI.
# 
# Pero por la asuncion realizada y los valores utilizados se asume entonces que los resultados negativos implican registros donde el KPI real no cumple con el KPI contratado es decir la inversion no es satisfecha y existe una perdida, valores positivos o iguales a cero implican registros donde el KPI real es igual al contradado o lo excede por lo tanto la inversion es completamente satisfecha o excede los valores contratados. 
# 
# El total de registros y su desempeno porcentual pude ser verificado en la tabla siguiente.
# 

# In[100]:

dataquery[4]


# ### Proveedores, marcas y formatos con mayor inversion mes a mes
# 
# * Consulta de proveedores, marcas y formatos con mayot inversion mensual:
# 
# *select DISTINCT d.proveedor, d.marca, d.tipo_de_kpi, d.FECHA, d.INVERSION_USD from ( select MAX(INVERSION_USD)  as max_inv,fecha from data GROUP by FECHA ) as x inner join data as d on d.INVERSION_USD = x.max_inv and x.fecha = d.FECHA*
# 
# 

# In[101]:

plt.figure()
dates = []
dic_date = {1:'Enero',2:'Febrero',3:'Marzo',4:'Abril',5:'Mayo',6:'Junio',7:'Julio',8:'Agosto',9:'Septiembre',10:'Octubre'}
fechas = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre'] 
for fec in dataquery[5].FECHA:
    dates.append(dic_date[fec.month])

unidades = dataquery[5].INVERSION_USD
plt.barh(dates, unidades, align = "center",color = "k")
plt.yticks(fechas,dataquery[5].proveedor+' - '+dates)
plt.xlabel('Inversion en USD')
plt.ylabel('Proveedores')
plt.title("Proveedores con mayor inversion por mes")
plt.show()

unidades = dataquery[5].INVERSION_USD
plt.barh(dates, unidades, align = "center",color = "b")
plt.yticks(fechas,dataquery[5].marca+' - '+dates)
plt.xlabel('Inversion en USD')
plt.ylabel('Marcas')
plt.title("Marcas con mayor inversion por mes")
plt.show()

unidades = dataquery[5].INVERSION_USD
plt.barh(dates, unidades, align = "center",color = "y")
plt.yticks(fechas,dataquery[5].formato+' - '+dates)
plt.xlabel('Inversion en USD')
plt.ylabel('Formato')
plt.title("Formato con mayor inversion por mes")
plt.show()


# Los datos de los graficos anteriores corresponden con los valores que se observan en la tabla siguiente:

# In[102]:

dataquery[5]


# In[20]:

con.close()

