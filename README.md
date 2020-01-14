# Inicial (Seguira um padrão readme)

"A GRU é o documento de arrecadação para todos os serviços prestados pelo INPI. 
Alguns desses documentos necessitam ser recuperados para que todas as informações pertinentes estejam disponíveis para os usuários do INPI. 
Os documentos que necessitam ser recuperados são conhecidos e identificados pelo número da GRU.

A demanda deverá ser entregue em branch específica, e posteriormente na master. A análise da entrega deverá ser feita sobre a branch master ao final de cada demanda.

Para configuração local, o acesso à base de dados é:

URL: jdbc:oracle:thin:@x.x.x.x:x:dsv
Usuário: x
Senha: x

Demanda

A demanda deverá ser entregue na branch dpc_demanda01 e posteriormente na master do projeto dpc_calma_01.

Criar um webservice e API para acesso ao serviço que, a partir do número da GRU, retorne as informações registradas para o documento.
Caso a GRU não seja encontrada, o serviço deverá retornar o código http 404.

As GRUs para recuperação estão registradas na tabela TB_GRU_RECUPERACAO, sendo NU_GRU (VARCHAR2) o número da GRU."

Você deve fazer a questão e criar pelo menos um teste com o Postman ou semelhante. Seu código fonte deverá passar nos critérios do Sonar listados em anexo ( excluindo a cobertura de testes ).
