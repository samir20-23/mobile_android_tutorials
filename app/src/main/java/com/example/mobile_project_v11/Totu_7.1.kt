package com.example.mobile_project_v11

fun main() {
    val rockPlanets = arrayOf("Earth", "Mars", "Venus", "Mercury")
    val gasPlanets = arrayOf("Jupiter", "Saturn", "Uranus", "Neptune")
    val solarSystemArray = rockPlanets + gasPlanets
    println("Solar System Array: ${solarSystemArray.contentToString()}")
    println("Second planet in the array: ${solarSystemArray[1]}")
    solarSystemArray[0] = "Little Earth"
    println("Modified Array: ${solarSystemArray.contentToString()}")

    val rockPlanetsList = listOf("Earth", "Mars", "Venus", "Mercury")
    println("\nRock Planets List: $rockPlanetsList")
    println("Number of rock planets: ${rockPlanetsList.size}")
    println("Second planet in the list: ${rockPlanetsList[1]}")
    println("Index of Earth: ${rockPlanetsList.indexOf("Earth")}")
    for (planet in rockPlanetsList) {
        println("Rock Planet: $planet")
    }

    val gasPlanetsList = mutableListOf("Jupiter", "Saturn", "Uranus", "Neptune")
    gasPlanetsList.add("New Planet")
    println("Mutable Gas Planets List: $gasPlanetsList")

    val solarSystemSet = mutableSetOf("Mercury", "Venus", "Earth", "Mars")
    println("\nSolar System Set Size: ${solarSystemSet.size}")
    solarSystemSet.add("New Planet")
    println("Set after adding a planet: ${solarSystemSet.size}")
    println("Does the set contain Pluto? ${solarSystemSet.contains("Pluto")}")

    val solarSystemMap = mutableMapOf(
        "Mercury" to 0,
        "Venus" to 0,
        "Earth" to 1,
        "Mars" to 2,
        "Jupiter" to 79,
        "Saturn" to 82,
        "Uranus" to 27,
        "Neptune" to 14
    )
    println("\nSolar System Map Size: ${solarSystemMap.size}")
    solarSystemMap["Pluto"] = 5
    println("Map Size after adding Pluto: ${solarSystemMap.size}")
    println("Moons of Pluto: ${solarSystemMap["Pluto"]}")
    println("Moons of Theia (non-existent): ${solarSystemMap.get("Theia")}")
}