create database varejo;

create table mercadoria_negociacao (
	 cod_mercadoria int AUTO_INCREMENT,
     tipo_mercadoria integer not null,
	 nome_mercadoria varchar(50) not null,
	 qtd_mercadoria smallint not null default 1,
     preco_mercadoria decimal(10, 2) not null default 0,
     preco_total_mercadoria decimal(10, 2),
     tipo_negociacao enum('compra', 'venda') default 'compra',
     constraint fk_tipo_mercadoria foreign key (tipo_mercadoria) references tipo_mercadoria(cod_tipo),
	 constraint primary key (cod_mercadoria)
);

create table tipo_mercadoria (
	 cod_tipo int AUTO_INCREMENT,
	 descricao varchar(80),
     constraint primary key (cod_tipo)
);

drop table mercadoria_negociacao;
drop table tipo_mercadoria;