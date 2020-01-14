# dpc_calma_01

webservice e API para acesso ao serviço que retorne GRU, as informações registradas para o documento.

## Getting Started

"A GRU é o documento de arrecadação para todos os serviços prestados pelo INPI. 
Alguns desses documentos necessitam ser recuperados para que todas as informações pertinentes estejam disponíveis para os usuários do INPI. 
Os documentos que necessitam ser recuperados são conhecidos e identificados pelo número da GRU.

A demanda deverá ser entregue em branch específica, e posteriormente na master. A análise da entrega deverá ser feita sobre a branch master ao final de cada demanda.

Demanda

A demanda deverá ser entregue na branch dpc_demanda01 e posteriormente na master do projeto dpc_calma_01.

Criar um webservice e API para acesso ao serviço que, a partir do número da GRU, retorne as informações registradas para o documento.
Caso a GRU não seja encontrada, o serviço deverá retornar o código http 404.

As GRUs para recuperação estão registradas na tabela TB_GRU_RECUPERACAO, sendo NU_GRU (VARCHAR2) o número da GRU."

Você deve fazer a questão e criar pelo menos um teste com o Postman ou semelhante. Seu código fonte deverá passar nos critérios do Sonar listados em anexo ( excluindo a cobertura de testes ).

### Prerequisites

What things you need to install the software and how to install them

```
Give examples
```

### Installing

A step by step series of examples that tell you how to get a development env running

Say what the step will be

```
Give the example
```

And repeat

```
until finished
```

End with an example of getting some data out of the system or using it for a little demo

## Running the tests

Explain how to run the automated tests for this system

### Break down into end to end tests

Explain what these tests test and why

```
Give an example
```

### And coding style tests

Explain what these tests test and why

```
Give an example
```

## Deployment

Add additional notes about how to deploy this on a live system

## Built With

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [Maven](https://maven.apache.org/) - Dependency Management
* [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds

## Versioning

É usado [SemVer](http://semver.org/) para versionamento. Para as versões disponíveis, consulte o [tags neste repositório](https://github.com/denissoliveira/dpc_calma_01/tags).

## Authors

* **[Denis Oliveira](https://github.com/denissoliveira)**