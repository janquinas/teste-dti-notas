# Sistema de Gestão de Notas e Frequência

##  Sobre o Projeto
Este projeto foi criado como parte do **Teste Prático – dti digital**.
A ideia: ajudar um professor a organizar notas e frequência dos alunos de forma prática, clara e automática.
O sistema permite inserir os dados dos alunos e, a partir disso, visualizar médias e identificar rapidamente quem precisa de mais atenção.

O sistema permite que um professor:
- Cadastre alunos
- Insira notas (0 a 10) em **cinco disciplinas**
- Insira a **frequência** do aluno em percentual (0 a 100%)
- Visualize cálculos automáticos de médias e relatórios importantes

---

## Funcionalidades
- Cadastro de alunos
- Entrada de 5 notas por aluno
- Entrada da frequência em percentual
- Cálculo automático da **média de notas por aluno**
- Cálculo da **média da turma em cada disciplina**
- Identificação de:
  - Alunos com **média acima da média da turma**
  - Alunos com **frequência abaixo de 75%**

---

## Como Executar o Projeto

### Pré-requisitos
- Navegador web atualizado
- Ambiente local para execução de aplicações web 

### Passo a Passo
1. Clone este repositório:
   ```bash
   git clone https://github.com/janquinas/teste-dti-notas.git
   ```
2. Acesse a pasta do projeto:
   ```bash
   cd teste-dti-notas
   ```
3. Execute o projeto conforme a stack utilizada:
   - **PHP**: coloque o projeto em um servidor local (ex.: XAMPP, WAMP) e acesse via navegador.

---

## Saída Esperada
Para cada aluno:
- Média das notas
- Frequência
- Média da turma em cada disciplina
- Lista de alunos com média acima da média da turma
- Lista de alunos com frequência abaixo de 75%

> Caso não existam alunos em alguma das listas, uma **linha vazia** é exibida.

---

## O sistema mostra:
- Todas as notas são valores numéricos entre **0 e 10**
- A frequência é informada como percentual
- O número de alunos não possui limite fixo
- Os dados são mantidos apenas em memória.

---

## Decisões de Projeto
- A lógica de cálculo foi feita sem bibliotecas externas para regras de negócio
- Interface simples, com clareza e funcionalidade
- Separação entre lógica de cálculo e exibição dos dados
- Estrutura pensada para fácil leitura

---

## Tecnologias Utilizadas
- HTML / CSS para interface
- PHP para lógica de negócio

---

## Observações Finais
Este projeto foi desenvolvido com foco em atender exatamente ao que foi pedido no teste prático, mantendo o código simples, organizado e fácil de entender.
