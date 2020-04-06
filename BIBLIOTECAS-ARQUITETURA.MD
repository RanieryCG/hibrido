
#Bibliotes usadas
Foram usadas a biblioteca Illuminate/Database via composer que instala o eloquent como ORM da aplicação.
A biblioteca javascript jquery mask para fazer a máscara dos inputs do tipo cpf e telefone.

#Arquitetura
Foi utilizado a arquitetura DDD com algumas modificações. A pasta "Apresentação" ficou responsável pelo front-end, seria o próprio site. A pasta Aplicação seria a parte responsável pela comunicação com os domínios da aplicação, neste caso apenas o domínio "Clientes.

A parte de Domínios foi utilizada com algumas diferenças. O modelo nesse caso fica responsável também pelo crud, escolho esse tipo de abordagem pois se precisar utilziar esse mesmo modelo em outro domínio, é fácil extender e manter as regras.

Foi criado um mini MVC na parte de Apresentação, para usar o padrão. Gosto bastante desse padrão acoplado ao DDD.

Não foi usado testes, pois honestamente não consegui configurar o PHPUnit com o docker. Estou pesquisando. 

Foi usado autoload com PSR-4 no composer e tenteni manter o padrão de código da PSR-12. 