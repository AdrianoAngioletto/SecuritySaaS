# 🛡️ Projeto: Site de Consultoria de Cibersegurança

Este é um projeto de um **site de consultoria de cibersegurança**, desenvolvido com foco em **segurança digital** e **boas práticas de desenvolvimento**. O site conta com funcionalidades como sistema de login, agendamento de serviços e gerenciamento de sessões, utilizando **PHP**, **HTML**, **CSS** e **JavaScript puro**.

meu objetivo é oferecer uma solução leve (com poucas dependências externas), mas ao mesmo tempo funcional, priorizando segurança e desempenho.

---

## 🧰 Tecnologias Utilizadas

- **PHP**: Lógica do lado do servidor e manipulação de dados.
- **HTML5**: Estrutura das páginas.
- **CSS3**: Estilização e design responsivo.
- **JavaScript (Vanilla)**: Funcionalidades dinâmicas no lado do cliente.


### 📦 Dependências (muito leves)
- Nenhuma ou poucas bibliotecas externas serão utilizadas para minimizar riscos de vulnerabilidade.

---

## ⚙️ Funcionalidades

- **Sistema de Login/Sessão**
  - Autenticação de usuários.
  - Gerenciamento de sessões seguras.
  - Proteção contra ataques comuns (ex.: SQL Injection e XSS).

- **Agendamento de Serviços**
  - Formulário para contato e agendamento de serviços.
  - Integração para envio de mensagens ao time de especialistas.

- **Design Responsivo**
  - Adaptado para desktop, tablet e dispositivos móveis.

- **Segurança**
  - Uso de boas práticas para minimizar vulnerabilidades em torno do sistema.
  - Validação de dados no lado cliente e servidor.

---

## 🚀 Como Executar o Projeto

### Pré-requisitos
Certifique-se de ter os seguintes itens instalados no seu sistema:
- **PHP** (7.4 ou superior)
- **Servidor Apache** ou outro servidor compatível.
- **Git** (para clonar o repositório).

### Passos
1. **Clone este repositório**:
   ```bash
   git clone https://github.com/AdrianoAngioletto/SecuritySaaS.git
   ```

2. **Acesse o diretório do projeto**:
   ```bash
   cd SecuritySaaS
   ```

3. **Inicie o servidor local**:
   - Usando o built-in do PHP:
     ```bash
     php -S localhost:8000
     ```
   - Ou configure no Apache/Nginx.

4. **Acesse o site** no navegador:
   ```
   http://localhost:8000
   ```

---


## 🔒 Boas Práticas de Segurança

Durante o desenvolvimento deste projeto, adotamos as seguintes boas práticas:
- **Validação de Entrada**:
  - Todos os dados enviados pelo usuário são validados no servidor e no cliente.
- **Proteção contra SQL Injection**:
  - Uso de **Prepared Statements** para consultas ao banco de dados.
- **Proteção contra XSS**:
  - Sanitização de entradas e saídas para evitar scripts maliciosos.
- **Gerenciamento de Sessões**:
  - Sessões seguras com controle de expiração e regeneração de IDs.

---

## 🤝 Contribuindo

Quer contribuir com este projeto? Siga os passos abaixo:

1. **Faça um Fork** deste repositório.
2. Crie uma nova branch para a sua funcionalidade ou correção:
   ```bash
   git checkout -b minha-nova-funcionalidade
   ```
3. Commit suas alterações:
   ```bash
   git commit -m "Adiciona nova funcionalidade X"
   ```
4. Envie suas alterações para a sua branch no GitHub:
   ```bash
   git push origin minha-nova-funcionalidade
   ```
5. Abra um **Pull Request** explicando as alterações feitas.

---

## 📜 Licença

Este projeto está licenciado sob a **MIT License**. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

---

## ✉️ Contato

Se tiver dúvidas ou sugestões, entre em contato:
- **Autor**: Adriano Angioletto
- **E-mail**: [adriano@example.com](mailto:adriano@example.com)
- **GitHub**: [AdrianoAngioletto](https://github.com/AdrianoAngioletto)