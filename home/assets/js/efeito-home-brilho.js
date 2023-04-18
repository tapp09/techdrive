        var i = 0;
        var texto =" Ao Futuro";
        var vel = 250
        var H1 = document.querySelector('h1')

        function animacaoH1 () {
            if(i<texto.length){
                H1.innerHTML += texto.charAt(i)
                i++
                setTimeout(animacaoH1, vel)
            }else {
               H1.classList.add('sombra') 
            }
        }
        var a = 0;
        var texto2 =" O futuro chegou e é elétrico - junte-se a nós nessa jornada sustentável.";
        var velo = 50
        var P = document.querySelector('p')

        function animacaoH2 () {
            if(a<texto2.length){
                P.innerHTML += texto2.charAt(a)
                a++
                setTimeout(animacaoH2, velo)
        
            }   
        }
        animacaoH1()
        animacaoH2()

        /* var i = 0; cria uma variável chamada i e atribui a ela o valor inicial de 0.

        var texto =" Ao Futuro"; cria uma variável chamada texto e atribui a ela a string "Ao Futuro".

        var vel = 250 cria uma variável chamada vel e atribui a ela o valor 250.

        var H1 = document.querySelector('h1') cria uma variável chamada H1 e atribui a ela o elemento HTML h1 encontrado na página da web usando o método document.querySelector().

        function animacaoH1 () {...} define uma função chamada animacaoH1, que é usada para animar o texto no elemento h1.

        if(i<texto.length){...} verifica se o valor atual da variável i é menor que o comprimento da string texto.

        H1.innerHTML += texto.charAt(i) adiciona o caractere atual da string texto ao HTML do elemento h1.

        i++ incrementa a variável i em 1.

        setTimeout(animacaoH1, vel) define um atraso de vel milissegundos antes de chamar a função animacaoH1 novamente.

        H1.classList.add('sombra') adiciona a classe sombra ao elemento h1 quando toda a string texto foi animada.

        var a = 0; cria uma variável chamada a e atribui a ela o valor inicial de 0.

        var texto2 =" O futuro chegou e é elétrico - junte-se a nós nessa jornada sustentável."; cria uma variável chamada texto2 e atribui a ela a string "O futuro chegou e é elétrico - junte-se a nós nessa jornada sustentável.".

        var velo = 50 cria uma variável chamada velo e atribui a ela o valor 50.

        var P = document.querySelector('p') cria uma variável chamada P e atribui a ela o elemento HTML p encontrado na página da web usando o método document.querySelector().

        function animacaoH2 () {...} define uma função chamada animacaoH2, que é usada para animar o texto no elemento p.

        if(a<texto2.length){...} verifica se o valor atual da variável a é menor que o comprimento da string texto2.

        P.innerHTML += texto2.charAt(a) adiciona o caractere atual da string texto2 ao HTML do elemento p.

        a++ incrementa a variável a em 1.

        setTimeout(animacaoH2, velo) define um atraso de velo milissegundos antes de chamar a função animacaoH2 novamente.

        animacaoH1() chama a função animacaoH1 para iniciar a animação do elemento h1.
        
        animacaoH2() chama a função animacaoH2 para iniciar a animação do elemento p.

*/