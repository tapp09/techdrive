function mascara(i){
   
    var v = i.value;
    
    if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
       i.value = v.substring(0, v.length-1);
       return;
    }
    
    i.setAttribute("maxlength", "14");
    if (v.length == 3 || v.length == 7) i.value += ".";
    if (v.length == 11) i.value += "-";
 
 }

 /* var v = i.value;: essa linha cria uma variável chamada v e atribui o valor atual do campo de entrada i a ela.

if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número: essa linha verifica se o último caractere digitado no campo i é um número. Se não for, a linha seguinte é executada.

i.value = v.substring(0, v.length-1);: essa linha remove o último caractere digitado do campo i.

return;: essa linha interrompe a execução da função, uma vez que um caractere não-numérico foi digitado.

i.setAttribute("maxlength", "14");: essa linha define o comprimento máximo do campo i como 14 caracteres.

if (v.length == 3 || v.length == 7) i.value += ".";: essa linha adiciona um ponto (.) no campo i após o terceiro e o sétimo caracteres digitados.

if (v.length == 11) i.value += "-";: essa linha adiciona um hífen (-) no campo i após o décimo primeiro caractere digitado.
*/