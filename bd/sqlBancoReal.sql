create database if not exists bd_quiz
character set utf8
collate utf8_general_ci;

use bd_quiz;

CREATE TABLE Cadastro(
idCadastro int AUTO_INCREMENT not null,
nome varchar(80) not null,
senha varchar(45) not null,
email varchar(60) not null,
instituicaoEnsino varchar(80),
dataNasc DATE,
dataDeInclusao timestamp not null,
adm tinyint,
PRIMARY KEY (idCadastro)
);

CREATE TABLE Quiz(
idQuiz int not null AUTO_INCREMENT,
tema varchar(45) not null,
dataInclusao timestamp,
numPerguntas int,
tempoTotal int,
PRIMARY KEY (idQuiz)
);

CREATE TABLE Jogados(
idJogados int not null AUTO_INCREMENT,
idUsuario int, 
idQuiz int,
dataInclusao timestamp,
PRIMARY KEY (idJogados),
FOREIGN KEY (idUsuario) REFERENCES Cadastro(idCadastro),
FOREIGN KEY (idQuiz) REFERENCES Quiz (idQuiz)
);	

CREATE TABLE Perguntas(
idPergunta int not null auto_increment,
idQuiz int,
pergunta VARCHAR (140) not null,
imagem VARCHAR (250),
tempoResposta int,
dataInclusao timestamp,
PRIMARY KEY (idPergunta),
FOREIGN KEY (idQuiz) REFERENCES Quiz(idQuiz)
);

CREATE TABLE Respostas(
idRespostas int not null auto_increment,
idPergunta int,
resposta varchar(150) not null,
respostaCerta TINYINT not null,
dataInclusao timestamp,
PRIMARY KEY (idRespostas),
FOREIGN KEY (idPergunta) REFERENCES Perguntas (idPergunta)
);

CREATE TABLE Estatisticas(
idEstatisticas int not null auto_increment,
idPergunta int,
idRespostas int,
idJogados int,
tempo INT, 
dataInsercao timestamp,
acertou tinyint,
PRIMARY KEY (idEstatisticas),
FOREIGN KEY (idPergunta) REFERENCES Perguntas(idPergunta),
FOREIGN KEY (idRespostas) REFERENCES Respostas (idRespostas),
FOREIGN KEY (idJogados) REFERENCES Jogados(idJogados)
);
