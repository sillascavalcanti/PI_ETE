var dbDevLearning = openDatabase('Dev.Learning_tips', '1.0', 'Dev.learning.DB', 2 * 1024 * 1024);

dbDevLearning.transaction(function(criar){
    criar.executeSql("CREATE TABLE Usuarios (id INT AUTO_INCREMENT PRIMARY KEY, nome_completo VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, data_nascimento DATE)")
});

dbDevLearning.transaction(function(criar){
    criar.executeSql("CREATE TABLE Sugestoes (id INT AUTO_INCREMENT PRIMARY KEY, sugestao TEXT NOT NULL, email_usuario VARCHAR(255) NOT NULL, FOREIGN KEY (email_usuario) REFERENCES Usuarios(email))")
})

function salvar(){
    var nome_completo = document.getElementById('nome_completo').value;
    var email = document.getElementById('email').value;
    var data_nascimento = document.getElementById('data_nascimento').value;
    dbDevLearning.transaction(function(armazenar){
        armazenar.executeSql("INSERT INTO Usuarios (nome_completo, email, data_nascimento) VALUES (?,?,?)",[nome_completo,email,data_nascimento]);
    });
}

function salvar_sugestao(){
    var sugestao = document.getElementById('sugestao').value;
    var email_usuario = document.getElementById('email_usuario').value;
    dbDevLearning.transaction(function(armazenar){
        armazenar.executeSql("INSERT INTO Sugestoes (sugestao, email_usuario) VALUES (?,?)",[sugestao, email_usuario]);
    });
}
