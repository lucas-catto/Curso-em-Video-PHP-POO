<?php
    // Aula Prática 6 – Encapsulamento
    //Nessa aula de POO, vamos aprender como fazer encapsulamento em PHP, entendendo melhor o primeiro dos três pilares da POO
    /*
    Descrevendo o algoritmo (UML):

    <<Interface>> Controlador
    // Métodos (abstratos):
    + ligar()
    + desligar()
    + abrirMenu()
    + fecharMenu()
    + maisVolume()
    + menosVolume()
    + ligarMudo()
    + desligarMudo()
    + play()
    + pause()

    // definido a classe:

    ControleRemoto

    - volume
    - ligado
    - tocando
    + ligar()
    + desligar()
    + abrirMenu()
    + fecharMenu()
    + maisVolume()
    + menosVolume()
    + ligarMudo()
    + desligarMudo()
    + play()
    + pause()
    - getVolume()
    - setVolume()
    - getLigado()
    - setLigado()
    - getTocando()
    - setTocando()

    // criando a interface - todos que forem definidos como "Controlador" vai ter que implementar esses métodos, não é dito o que cada método fará, apenas vou precisar desses métodos.
    interface Controlador
        // Métodos abstrados
        publico abstrato Metodo ligar()
        publico abstrato Metodo desligar()
        publico abstrato Metodo abrirMenu()
        publico abstrato Metodo fecharMenu()
        publico abstrato Metodo maisVolume()
        publico abstrato Metodo menosVolume()
        publico abstrato Metodo ligarMudo()
        publico abstrato Metodo desligarMudo()
        publico abstrato Metodo play()
        publico abstrato Metodo pause()
    fimInterface

    // criando a classe
    classe ControleRemoto implementa Controlador
        // Atributos:
        privado inteiro volume
        privado logico  ligado
        privado logico  tocando

        // Métodos especiais (construtor):
        publico Metodo Contrutor()
            volume  = 50
            ligado  = falso
            tocando = falso
        FimMetodo

        privado Metodo getVolume()
            retorne Volume
        FimMetodo
        privado Metodo setVolume(v: Inteiro)
            volume = v
        FimMetodo
        privado Metodo getLigado()
            retorne Ligado
        FimMetodo
        privado Metodo setLigado(l: logico)
            ligado = l
        FimMetodo
        privado Metodo getTocando()
            retorne Tocando
        FimMetodo
        privado Metodo setTocando(t: logico)
            tocando = t
        FimMetodo

        // Sobrescrevendo Métodos (do Controlador):
        
        Publico Metodo ligar()
            setLigado(verdadeiro)
        FimMetodo
        Publico Metodo desligar()
            setLigado(falso)
        FimMetodo
        Publico Metodo abrirMenu()
            Escreva(getLigado())
            Escreva(getVolume())
            Para i = 0 ate getVolume() passo 10 faca
                Escreva("|")
            FimPara
            Escreva(getTocando())
        FimMetodo
        Publico Metodo fecharMenu()
            Escreva("Fechando menu...")
        FimMetodo
        Publico Metodo maisVolume()
            Se(getLigado()) entao
                setVolume(getVolume() +1)
            FimSe
        FimMetodo
        Publico Metodo menosVolume()
            Se(getLigado()) entao
                setVolume(getVolume() -1)
            FimSe
        FimMetodo
        Publico Metodo ligarMudo()
            Se (getLigado() e getVolume() > 0) entao
                setVolume(0)
            FimSe
        FimMetodo
        Publico Metodo desligarMudo()
            Se (getLigado() e getVolume() = 0) entao
                setVolume(50)
            FimSe
        FimMetodo
        Publico Metodo play()
            Se (getLigado() e nao getTocando()) entao
                setTocando(verdadeiro)
            FimSe
        FimMetodo
        Publico Metodo pause()
            Se (getLigado() e  getTocando()) entao
                setTocando(falso)
            FimSe
        FimMetodo
    FimClasse

    */

?>