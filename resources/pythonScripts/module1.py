
# coding: utf-8

# In[63]:

from sqlalchemy import create_engine
import pandas as pd


# In[52]:

def clean_data(value):
    if type(value) == str:
        value = value.lstrip().rstrip().rstrip('.').rstrip(',').rstrip('-').lstrip().replace('Á','A').replace('É','E').replace('Í','I').replace('Ó','O').replace('Ú','U').replace('Ñ','N').replace(
    'á','a').replace('é','e').replace('í','i').replace('ó','o').replace('ú','u').replace('ñ','n')
        return value
    else:
        return value


# In[53]:

#Reading data
data = pd.read_excel('TEST 1dd_ACK.XLSX', sheet_name='Bd')


# In[54]:

#Cleaning column names
attr = data.columns
new_names = []
for name in attr:
    name_ = name.rstrip().replace(' ','_').replace('Á','A').replace('É','E').replace('Í','I').replace('Ó','O').replace('Ú','U').replace('Ñ','N').replace('%','PERCENT')
    new_names.append(name_)
data.columns = new_names


# In[55]:

#Replacing NaN values with 0
data.fillna(0, inplace=True)


# In[56]:

#Cleaning data from special char
for col in data.columns:
    for value in data[col]:
        data[col] = data[col].apply(clean_data)


# In[62]:

engine = create_engine(
      "mysql://datatest0:00000000@localhost/datatest0?host=db4free.net?port=3306")

con = engine.connect()


# In[73]:

data.to_sql(name='data',con=con,if_exists='replace')
con.close()

