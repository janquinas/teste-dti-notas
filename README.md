# Sistema de Gestão de Notas e Frequência

##  Descrição do Projeto
Este projeto consiste em um sistema web simples para gestão de **notas** e **frequência** de alunos, desenvolvido para atender ao **Teste Prático – dti digital**.

O sistema permite que um professor:
- Cadastre alunos
- Insira notas (0 a 10) em **cinco disciplinas**
- Insira a **frequência** do aluno em percentual (0 a 100%)
- Visualize cálculos automáticos de médias e relatórios importantes

---

## ⚙️ Funcionalidades
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

### Passos
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

Além disso:
- Média da turma em cada disciplina
- Lista de alunos com média acima da média da turma
- Lista de alunos com frequência abaixo de 75%

> Caso não existam alunos em alguma das listas, uma **linha vazia** é exibida.

---

## Premissas Assumidas
- Todas as notas são valores numéricos entre **0 e 10**
- A frequência é informada como percentual
- O número de alunos não possui limite fixo
- Os dados são mantidos apenas em memória.

---

## Decisões de Projeto
- A lógica de cálculo foi implementada manualmente, sem bibliotecas externas para regras de negócio
- Interface simples, priorizando clareza e funcionalidade
- Separação entre lógica de cálculo e exibição dos dados
- Estrutura pensada para fácil manutenção e extensão

---

## Tecnologias Utilizadas
- HTML / CSS para interface
- PHP para lógica de negócio

---

## Observações Finais
Este projeto foi desenvolvido com foco em atender todos os requisitos propostos no teste prático, priorizando clareza de código, lógica bem definida e facilidade de uso.
