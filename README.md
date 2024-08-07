# 📃Descrição
Este código projeta um site de compra com o banco de dados, onde você irá adicionar um produto, marca e a categoria deste item, onde será colocado ao banco de dados.
Criamos um banco de dados com o nome Compra onde tudo que será feito irá ficar nele.  
![image info](_img/banco_de_dados.png)  
A baixo está o código funcionando, depois de cadastrar em cada uma das funções.
![image info](_img/fun%C3%A7%C3%A3o_c%C3%B3digo.gif)

# ⚙️Função
🔸Iniciamo o código com um arquivo de ``conexão`` que está dentro da pasta controller, onde conecta ``PHP`` com ``Banco de dados.``  
$user: Nome de usuário do banco de dados.    
$pass: Senha do usuário do banco de dados.  
$server: Endereço do servidor MySQL.  
$db: Nome do banco de dados que será utilizado, neste caso o Banco ``Compra``  

    $user = 'root';  
    $pass = '';  
    $server = 'localhost';  
    $db = 'compra';  

🔸O código a baixo estabelece uma conexão com o banco de dados MySQL utilizando a função ``mysqli_connect()``. O resultado da função é armazenado na variável ``$mysqli``, que será um objeto representando a conexão com o banco de dados.  

    $mysqli = mysqli_connect($server, $user, $pass, $db);

🔸Este código está definindo o conjunto de caracteres a ser usado para a comunicação com o banco de dados como ``UTF-8``. Isso é importante para garantir que os dados armazenados e recuperados do banco de dados.

    $mysqli->set_charset('utf8');

🔸Iremos verificar se ocorreu algum erro durante a tentativa de conexão com o banco de dados. A propriedade ``connect_error`` da variável ``$mysqli`` armazena qualquer mensagem de erro de conexão.
Caso houver um erro de conexão, a função ``die`` é chamada, exibindo a mensagem ``'Connect Error'``.

    if ($mysqli->connect_error){
        die ('Connect Error');
    }  

🔹


# 🧐Fontes Consultadas
🔴[PHP](https://www.php.net/manual/pt_BR/book.mysqli.php)  
🔴[Mozila](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Statements/while)  
🔴[Git](https://github.com/MaferCastilho/form-CadEndereco)  
🔴[ChatGPT](https://chatgpt.com/)  

# 💻Tecnologias consultadas
🟢PHP  
🟢HTML  
🟢CSS  
🟢Mysql (banco de dados)  
🟢GitHub  

# 🖌️Autores
🩶[Janaina Paulino](https://github.com/janapaulinoo)  
💛Maria Fernanda  