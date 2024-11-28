package com.example.mobile_project_v11


val list = listOf("Pomme", "Banane", "Cerise")  ;
val mutableList = mutableListOf(1, 2, 3)  ;
val set = setOf(1, 2, 3, 3);

fun main(){
    println(set)
}
                                       // Filter and transform data:
val nombres = listOf(1, 2, 3, 4, 5)
val pairs = nombres.filter { it % 2 == 0 } 
val carrés = nombres.map { it * it }       
fun main(){
    println(pairs)
    println(carrés)
    nombres.forEach{println(it)}
}
                                       //Create a generic function:

fun <T> afficherElement(element: T) {
    println(element)
}
fun main() {
afficherElement(42)        
afficherElement("Bonjour") 
}

                                       // Generic class:
class Boîte<T>(val contenu: T) {
    fun afficherContenu() {
        println("Contenu : $contenu")
    }
}

fun main() {
val boîteInt = Boîte(123)
val boîteString = Boîte("Hello")
boîteInt.afficherContenu()    
boîteString.afficherContenu() 
}

                                       // Example extension for String: 
fun String.inverser(): String {
    return this.reversed()
}
fun main() {
println("Kotlin".inverser()) 
}
                                       // Higher order functions:

                fun appliquerOperation(a: Int, b: Int, operation: (Int, Int) -> Int): Int {
                                        return operation(a, b)
                                    }
                                     
                                    val somme = appliquerOperation(5, 3) { x, y -> x + y } 
                                    val produit = appliquerOperation(5, 3) { x, y -> x * y }  
                                    
                                    fun main() { 
                                        println(somme)
                                        println(produit)
                                     
                                    }
                                        // exercises : 
// EX 1 :
val nombres = listOf(1, 2, 3, 42, 5)
val fillter = nombres.filter{it>10};
fun main() { 
    println(fillter)
 
} 
// EX 2 : 
val strings = listOf("kotlin", "java", "python")
val upperCaseStrings = strings.map{it.uppercase() }
fun main() { 
println("Strings in uppercase: $upperCaseStrings")
}
