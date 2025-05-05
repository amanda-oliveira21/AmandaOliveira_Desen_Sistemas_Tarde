from selenium import webdriver
from selenium.webdriver.commom.by import By 
import time

#Configuração do WebDriver (nesse exemplo, estamos usando o Chrome)
driver = webdriver.Chrome()

#Acessa a página de cadastro usando o caminho absoluto
# com o protocolo file://
# Certifique-se de que o caminho está apontando para um arquivo
# HTML específico
driver.get("file:///C:\Users\amanda_oliveira22\Documents\GitHub\AmandaOliveira_Desen_Sistemas_Tarde\teste_amanda\index.html")

# Preencha o campo CPF
cpf_input = driver.find_element(By.ID, "cpf")
cpf_input.send_keys("12345678901")

# Preencha o campo Endereço
cpf_input = driver.find_element(By.ID, "address")
cpf_input.send_keys("Rua das Flores")

# Preencha o campo Telefone
cpf_input = driver.find_element(By.ID, "phone")
cpf_input.send_keys("119887654321")

#Clica no botão de Cadastrar
submit_buttom= driver.find_element(By.CSS_SELECTOR, "button[type='submit']")
submit_buttom.click()

#Aguarde um momento para visualizar o resultado (em uma aplicação real, você verificaria a resposta)
time.sleep(3)

#Fecha o navegador
driver.quit()



