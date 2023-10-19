# Descrição
 Foi criado uma API, usando PHP (8.0+), com os métodos/endpoints:

 [GET]/api/usuarios (lista os usúario)
 [POST]/api/usuarios (add os usúario)
 [GET]/api/usuarios{id} (lista os usúario por id)

# Desafio

Receber o nome e e-mail, gravará em um banco de dados e retornar um JSON com o ID da inscrição.
Deve sanitizar e normalizar o endereço de e-mail.
Deve rejeitar e-mails duplicados.
Listar os nomes e e-mails já registrados em JSON.
Receber o ID de uma inscrição, e enviar um e-mail com o conteúdo "Hello, {nome}" através de um SMTP do Mailtrap (você pode fazer uma conta gratuíta para testes; fique a vontade para usar outras opções de envio de e-mail se preferir).
O formulário deve enviar os dados para a API via AJAX, e deve exibir uma mensagem de sucesso ou erro de acordo com o retorno.

# Para rodar o código

Você deve ir na pasta raiz do projeto digitar
$php artisan serve


# Stacks utilizadas

Para esse projeto foi utilizado o Framework [Lavarel] 
Biblioteca sempre carregada via [Composer]
Foi utilizado um banco de dados não relacional [MySql] Para fazer os registros de banco de dados  
Foi utilizado um serviço de [Mailtrap] email para o envio de email após o cadastro do usuario


# Objetivo do teste

Entendimento do problema e atenção às especificações, requisitos e restrições.
Arquitetura, organização e legibilidade de código, melhores práticas, redação.
SEO e semântica de HTML e CSS.
Tempo de desenvolvimento.
Atenção ao detalhe.
Segurança da informação.

# DATA/HORA 

Projeto iniciou dia 18/10
ás 8hs e terninou dia 19/10 às 17hs