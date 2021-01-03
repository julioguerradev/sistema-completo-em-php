CREATE TABLE cirurgia (
  id_cirurgia INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  medico_id_medico INTEGER UNSIGNED NOT NULL,
  cliente_id_cliente INTEGER UNSIGNED NOT NULL,
  data_cirurgia DATE NULL,
  tipo_cirurgia VARCHAR(65) NULL,
  PRIMARY KEY(id_cirurgia, medico_id_medico, cliente_id_cliente),
  INDEX medico_has_cliente_FKIndex1(medico_id_medico),
  INDEX medico_has_cliente_FKIndex2(cliente_id_cliente)
);

CREATE TABLE cliente (
  id_cliente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  medico_id_medico INTEGER UNSIGNED NOT NULL,
  nome_cliente VARCHAR(45) NULL,
  dt_nsc_cliente DATE NULL,
  dt_prim_cliente DATE NULL,
  remedio_cliente VARCHAR(45) NULL,
  contato_cliente VARCHAR(18) NULL,
  pagamento_cliente VARCHAR(45) NULL,
  PRIMARY KEY(id_cliente),
  INDEX cliente_FKIndex1(medico_id_medico)
);

CREATE TABLE clinica (
  id_clinica INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_clinica VARCHAR(45) NULL,
  PRIMARY KEY(id_clinica)
);

CREATE TABLE medico (
  id_medico INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  clinica_id_clinica INTEGER UNSIGNED NOT NULL,
  nome_medico VARCHAR(65) NULL,
  crm_medico VARCHAR(65) NULL,
  especialidade_medico VARCHAR(55) NULL,
  PRIMARY KEY(id_medico),
  INDEX medico_FKIndex1(clinica_id_clinica)
);


