# Integração OAuth do Google com PHP

Este projeto demonstra como integrar autenticação usando OAuth do Google em uma aplicação PHP, utilizando a classe `OAuthGoogle`.

## Pré-requisitos

Antes de começar, certifique-se de ter o seguinte configurado:

- PHP instalado na sua máquina (versão 7.x ou superior recomendada)
- Credenciais de cliente OAuth do Google obtidas através do Google Developer Console

## Obtendo as Credenciais de Cliente OAuth do Google

Para configurar as credenciais de cliente OAuth do Google, siga os passos abaixo:

1. **Acesse o Google Developer Console:**

   - Vá para [Google Cloud Console](https://console.cloud.google.com/).
   - Faça login na sua conta do Google ou crie uma nova conta se ainda não tiver uma.

2. **Crie um novo projeto:**

   - No painel superior, selecione ou crie um projeto clicando no menu suspenso ao lado do nome do seu projeto atual.

3. **Ative a API do Google que você deseja utilizar:**

   - No menu de navegação à esquerda, vá para "APIs & Services" > "Library".
   - Procure pela API do Google que você quer usar (por exemplo, "Google+ API" para autenticação básica).
   - Clique em "Enable" para ativar a API para o seu projeto.

4. **Configure as credenciais do OAuth:**

   - No menu de navegação à esquerda, vá para "APIs & Services" > "Credentials".
   - Clique em "Create credentials" e selecione "OAuth client ID".

5. **Configure o consentimento do OAuth:**

   - Se for solicitado, configure as informações do consentimento para o seu aplicativo. Isso é necessário para que os usuários finais possam entender como seus dados serão usados e conceder permissões.

6. **Preencha os detalhes do aplicativo:**

   - Escolha o tipo de aplicativo apropriado (Web application, Android, iOS, etc.).
   - Forneça um nome para o cliente OAuth.
   - Configure os URIs de redirecionamento autorizados. O URI de redirecionamento é a URL para onde o usuário será enviado após a autenticação bem-sucedida.

7. **Obtenha suas credenciais:**

   - Após salvar as configurações do OAuth, você receberá as credenciais do cliente, incluindo um ID de cliente e um segredo de cliente. Essas informações serão necessárias para configurar a classe `OAuthGoogle` no seu projeto PHP.

## Configuração

1. Clone o repositório para o seu ambiente local:

   ```bash
   git clone https://github.com/seu-usuario/seu-repositorio.git
   cd seu-repositorio
