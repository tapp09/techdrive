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