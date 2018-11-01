
# coding: utf-8

# In[62]:

from sqlalchemy import create_engine
import pandas as pd
import matplotlib.pyplot as plt
import numpy as np
from mpl_toolkits.mplot3d import axes3d
get_ipython().magic(u'matplotlib inline')


# In[155]:


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
    
def plot_att(x,y,frames,plt,axes,locx, locy,labelx,labely, p ='p'):     
    my_xticks = list(set(frames[locx]))
    plt.xticks(range(0,6,1), my_xticks)
    x_ = frames[locx]
    y_ = frames[locy]
    axes[x,y].plot(x_,y_,'b '+p)
    axes[x,y].grid(which= 'both')
    axes[x,y].set_ylabel(labely)
    axes[x,y].set_xlabel(labelx)
    
def plot_att_x(x,y,frames,plt,axes, locx,locy,labelx,labely, p ='p'):     
    my_xticks = list(set(locx))
    plt.xticks(range(0,6,1), my_xticks)
    y_ = frames[locy]
    axes[x,y].plot(locx,y_,'b '+p)
    axes[x,y].grid(which= 'both')
    axes[x,y].set_ylabel(labely)
    axes[x,y].set_xlabel(labelx)

FORMATO_DIC = {'Carrusel':1, 'Link Ad':2, 'Right Time':3, 'Web Site Card':4,
               'Rich Media':5, 'Post':6, 'Push Notifications':7, 'Video':8,
               'Brand Content':9, 'Store Visits':10, 'Video Pmp':11, 'Native Ads':12,
               'Banners Tradicionales':13, 'Video Loop':14, 'Video Ad':15, 'Collection':16}

FORMATO_DIC_ = {1:'Carrusel', 2:'Link Ad', 3:'Right Time', 4:'Web Site Card',
               5:'Rich Media', 6:'Post', 7:'Push Notifications', 8:'Video',
               9:'Brand Content', 10:'Store Visits', 11:'Video Pmp', 12:'Native Ads',
               13:'Banners Tradicionales', 14:'Video Loop', 15:'Video Ad', 16:'Collection'}
    


# In[4]:

engine = create_engine(
      "mysql://datatest0:00000000@localhost/datatest0?host=db4free.net?port=3306")

con = engine.connect()


# In[8]:

data = pd.read_sql_query('SELECT * from data',con,index_col='index')


# In[269]:

views = []
for vie in data.VIEWS:
    try:
        views.append(pd.to_numeric(vie))
    except:
        views.append(0)
     


# ## Analisis de mercado para datos de prueba
# 
# ¿Cuáles son los **atributos** considerados?
# 
# - **Inversion en USD**
# - **Formato**
# 
# ¿Cuáles son las **respuestas**?
# 
# - **Impresiones**
# - **Clics**
# - **Views**
# - **Interaciones**
# 
# 
# 
#  

# In[118]:

fig, axs = plt.subplots(4, 2)
plt.subplots_adjust(top=5, bottom=0.09, left=0.2, right=3, hspace=0.2,
                    wspace=0.4) 
plot_att(0,0,data,plt,axs,'CLICS', 'INVERSION_USD','Clics','Inversion UDS')
plot_att(0,1,data,plt,axs,'CLICS', 'FORMATO','Clics','Formato')

plot_att(1,0,data,plt,axs,'IMPRESIONES', 'INVERSION_USD','Impresiones','Inversion UDS')
plot_att(1,1,data,plt,axs,'IMPRESIONES', 'FORMATO','Impresiones','Formato')

plot_att(3,1,data,plt,axs,'INTERACCIONES', 'FORMATO','Interacciones','Formato')
plot_att(3,0,data,plt,axs,'INTERACCIONES', 'INVERSION_USD','Interacciones','Inversion UDS')

plot_att_x(2,0,data,plt,axs,views, 'INVERSION_USD','Views','Inversion UDS')
plot_att_x(2,1,data,plt,axs,views, 'FORMATO','Views','Formato')




# ####  Analisis 1
# 
# Gracias a los graficos de dispersion en los que se estudian los valores de las variables de respuesta clics, impresiones, interacciones y views, se puede deducir que los mejores resultados se producen con inversiones menores a 6000 USD.
# 
# Con respecto a los formatos solo se puede deducir a simple vista que el formato video es el que produce mayor numero de vistas y el formato Native Ads es el que produce mayor numero de impresiones.

# ## Regresiones lineales

# ### Construccion de un modelo de regresion lineal con el atributo Inversion en USD para predecir el numero de clics en una publicacion
# 
# 

# Division de los datos de inversion y numero de clics en conjuntos de prueba y entrenamiento

# In[270]:

from sklearn.model_selection import train_test_split
atributos_cols = ['INVERSION_USD']
X = data[atributos_cols]
y = views
X_entrenamiento, X_prueba, y_entrenamiento, y_prueba = train_test_split(
    X, y, random_state=0)


# In[271]:

# seguir el patron de uso de sklearn: importar, instanciar, ajustar
from sklearn.linear_model import LinearRegression
lm = LinearRegression()
lm.fit(X_entrenamiento, y_entrenamiento)

# imprimir intercepto y coeficientes de la recta
print (lm.intercept_)
print (lm.coef_)


# In[272]:

#Evaluacion del modelo
lm.score(X_prueba, y_prueba)


# In[273]:

plt.plot(X_prueba,y_prueba,'.',
        X_prueba,lm.predict(X_prueba),'-')


# ### Construccion de un modelo de regresion lineal con los atributos formato e Inversion en USD para predecir el numero de clics en una publicacion
# 
# 

# In[275]:

forms = []
for form in data.FORMATO:
    forms.append(FORMATO_DIC[form])
data['forms'] = forms
all_atributos_cols = ['INVERSION_USD','forms']
X1 = data[all_atributos_cols]
y1 = views
X1_entrenamiento, X1_prueba, y1_entrenamiento, y1_prueba = train_test_split(
    X1, y1, random_state=0)


# In[276]:

lm1 = LinearRegression()
#Hacer el ajusto al modelo de regresion lineal con los conjuntos que se acaban de crear.
lm1.fit(X1_entrenamiento, y1_entrenamiento)
# imprimir intercepto y coeficientes
print (lm1.intercept_)
print (lm1.coef_)


# In[277]:

#Medida de veracidad de la prediccion
lm1.score(X1_prueba, y1_prueba)


# In[278]:

lm1 = LinearRegression()
lm1.fit(X1_entrenamiento, y1_entrenamiento)
# imprimir intercepto y coeficientes
print (lm1.intercept_)
print (lm1.coef_)


# ### Aplicar los modelos para predecir el numero de clics por inversion y por formato e inversion

# In[302]:

clics1 = data[data.index == 10]
clics1_X = clics1[atributos_cols]
print ('Valor de Inversion en USD para caso de prueba con index = 300')
clics1_X


# In[303]:

clics1_X1 = clics1[all_atributos_cols]
print ('Valor de Inversion en USD y formato para caso de prueba con index = 300')
print ('El formato 3 corresponde al valor: '+FORMATO_DIC_[10])

clics1_X1


# In[304]:

print ('Numero de Clics real para valores de prueba en el index = 300')
clics1_y =  views[10]
print (clics1_y)


# In[305]:

lm.predict(clics1_X)


# In[306]:

lm1.predict(clics1_X1)


# #### Analisis 2 
# La data no se ajusta a una regresion lineal por lo tanto no es buena ninguna prediccion realizada sobre estos modelos.

# ## Regresiones polinomiales

# ### Construccion de un modelo de regresion polinomial con el atributo formato para predecir el numero de clics en una publicacion

# In[354]:

def polinomial_dataframe(atributo, grado):
    # asumir que grado es >= 1
    # inicializar el DataFrame:
    poli_dataframe = pd.DataFrame()
    # fijar poli_dataframe['potencia_1'] igual al atributo pasado
    poli_dataframe['potencia_1'] = atributo
    # chequear si grado > 1
    if grado > 1:
        # realizar un lazo con los grados restantes:
        for potencia in range(2, grado+1): 
            # primero le damos el nombre a la columna:
            nombre = 'potencia_' + str(potencia)
            # luego asignamos a poli_dataframe[nombre] la potencia del atributo apropiada
            poli_dataframe[nombre] = atributo**potencia
    return poli_dataframe


# In[355]:

data_2 = data.sort_values(['forms'])

poli2_data_X = polinomial_dataframe(data_2.forms, 2)
poli2_data_y = views
modelo2 = LinearRegression()
modelo2.fit(poli2_data_X, poli2_data_y)
print (modelo2.intercept_)
print (modelo2.coef_)


# In[356]:

plt.plot(poli2_data_X.potencia_1, poli2_data_y,'.',
        poli2_data_X.potencia_1, modelo2.predict(poli2_data_X),'-')


# In[357]:

clics1 = data[data.index == 300]
clics1_X = clics1[atributos_cols]
print ('Valor de Inversion en USD para caso de prueba con index = 300')
clics1_X


# In[358]:

clics1_X1 = clics1[all_atributos_cols]
print ('Valor de Inversion en USD y formato para caso de prueba con index = 300')
print ('El formato 3 corresponde al valor: '+FORMATO_DIC_[10])

clics1_X1


# In[353]:

modelo2.predict(clics1_X1)


# #### Analisis 3 
# 
# Ni las regresiones polinomiales o lineales se ajustan a los valores que toman las variables de interes para predecir un valor real de la variable de interes.
