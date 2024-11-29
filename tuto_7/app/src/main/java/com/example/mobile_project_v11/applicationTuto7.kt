package com.example.mobile_project_v11

import android.os.Bundle
import android.util.Log
import androidx.appcompat.app.AppCompatActivity

// Initial collections
val list = listOf("Pomme", "Banane", "Cerise")
val mutableList = mutableListOf(1, 2, 3)
val set = setOf(1, 2, 3, 3)

// Filter and transform data
val nombres1 = listOf(1, 2, 3, 4, 5)
val pairs = nombres1.filter { it % 2 == 0 }
val carrés = nombres1.map { it * it }

// Create a generic function
fun <T> afficherElement(element: T) {
    Log.d("Generic Function", "Element: $element")
}

// Generic class
class Boîte<T>(val contenu: T) {
    fun afficherContenu() {
        Log.d("Generic Class", "Contenu: $contenu")
    }
}

// Extension function for String
fun String.inverser(): String {
    return this.reversed()
}

// Higher order function
fun appliquerOperation(a: Int, b: Int, operation: (Int, Int) -> Int): Int {
    return operation(a, b)
}

// Exercises
val nombres = listOf(1, 2, 3, 42, 5)
val fillter = nombres.filter { it > 10 }

val strings = listOf("kotlin", "java", "python")
val upperCaseStrings = strings.map { it.uppercase() }

class MainActivity : AppCompatActivity() {

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        // Printing collections to Log
        Log.d("Collections", "Set: $set")

        // Printing filtered and transformed data to Log
        Log.d("Filter and Map", "Pairs: $pairs")
        Log.d("Filter and Map", "Carrés: $carrés")

        nombres1.forEach { Log.d("List Item", "$it") }

        // Calling generic function
        afficherElement(42)
        afficherElement("Bonjour")

        // Generic class instances
        val boîteInt = Boîte(123)
        val boîteString = Boîte("Hello")
        boîteInt.afficherContenu()
        boîteString.afficherContenu()

        // Calling extension function
        Log.d("Extension Function", "Inversed: ${"Kotlin".inverser()}")

        // Using higher order function
        val somme = appliquerOperation(5, 3) { x, y -> x + y }
        val produit = appliquerOperation(5, 3) { x, y -> x * y }

        // Printing results of higher order function to Log
        Log.d("Higher Order Function", "Sum: $somme")
        Log.d("Higher Order Function", "Product: $produit")

        // Exercises
        Log.d("Exercises", "Filtered: $fillter")
        Log.d("Exercises", "Uppercase Strings: $upperCaseStrings")
    }
}
