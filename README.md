Sistema com objetivo de controle de inventário de equipamentos de informática
Como Computadores,Notebook e impressoras








1º - Criar base de dados:
No PHPMYADMIN -->
inserir:
CREATE DATABASE IF NOT EXISTS lantec



2º - Criar tabelas:
CREATE TABLE IF NOT EXISTS inventario (
inputUfsc int(40),
inputLantec int(40) AUTO_INCREMENT,
pcOptionsMarcas varchar(40) ,
pcInputModelo varchar(40),
pcInputSerial varchar(40),
pcMarcaProcessador varchar(40),
pcInputModeloProcessador varchar(40),
pcRadioConservacao varchar(40),
pcRadioStatus varchar(40),
pcInputLocalizacao varchar(40),
txtArea varchar(450),
    PRIMARY key(inputLantec)
) DEFAULT charset= utf8; 



