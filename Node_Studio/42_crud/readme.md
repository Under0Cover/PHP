INFORMAÇÕES IMPORTANTES

DEVE-SE CRIAR UM BANCO DE DADOS
    CONFIGURAÇÕES PADRÕES:
    BANCO DE DADOS:
        crud
    TABELAS:
        clientes
        COLUNAS:
            'id int 05 primary_key not null auto_increment'
            'nome varchar 255 not null'
            'sobrenome varchar 255 not null'
            'email varchar 255 not null'
            'idade int 03 not null'
            -- APESAR DE NÃO SER RECOMENDADO A UTILIZAÇÃO DE IDADE, POR TODOS OS SEUS PROBLEMAS, AQUI FOI UTILIZADO APENAS PARA EXEMPLIFICAÇÃO