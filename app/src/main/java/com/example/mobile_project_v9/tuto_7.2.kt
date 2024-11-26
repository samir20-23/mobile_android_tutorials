package com.example.mobile_project_v9

// i will a test a push or a create a pull request tuto_7.2
fun main() {

    val solarSystem = mutableMapOf(
        "Mercury" to 0,
        "Venus" to 0,
        "Earth" to 1,
        "Mars" to 2,
        "Jupiter" to 79,
        "Saturn" to 82,
        "Uranus" to 27,
        "Neptune" to 14
    )
    println(solarSystem.size)
    solarSystem["pluto"] = 5
    println(solarSystem.size)
    println(solarSystem["pluto"])
    println(solarSystem.get("Theia"))
}
