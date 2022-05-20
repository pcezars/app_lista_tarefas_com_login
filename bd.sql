CREATE TABLE tb_usuarios(
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome varchar(50) NOT NULL,
  email varchar(100) NOT NULL,
  senha varchar(32) NOT NULL
);

CREATE TABLE tb_status (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  status varchar(25) NOT NULL
);

INSERT INTO tb_status (status) VALUES ('pendente');
INSERT INTO tb_status (status) VALUES ('realizado');

CREATE TABLE tb_tarefas (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  id_status int(11) NOT NULL DEFAULT '1',
  tarefa text NOT NULL,
  data_cadastrado datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  usuario_id int(11) NOT NULL,
  FOREIGN KEY(usuario_id) REFERENCES tb_usuarios(id)
);