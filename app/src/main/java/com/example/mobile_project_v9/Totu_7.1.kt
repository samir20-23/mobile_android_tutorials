package com.example.mobile_project_v9

// test a create a tuto 7.1
fun main() {

    // *** Arrays ***
    val rockPlanets = arrayOf<String>("Earth", "Mars", "Venus", "Mercury")
    val gasPlanets = arrayOf("Jupiter", "Saturn", "Uranus", "Neptune")
    val solarSystemArray = rockPlanets + gasPlanets
    println("Solar System Array: ${solarSystemArray.contentToString()}")
    println("Second planet in the array: ${solarSystemArray[1]}")
    solarSystemArray[0] = "Little Earth"
    println("Modified Array: ${solarSystemArray.contentToString()}")
    // Uncomment the following line to see an exception (ArrayIndexOutOfBoundsException):
    // solarSystemArray[8] = "New Planet"

    // *** Lists ***
    val rockPlanetsList = listOf("Earth", "Mars", "Venus", "Mercury")
    println("\nRock Planets List: $rockPlanetsList")
    println("Number of rock planets: ${rockPlanetsList.size}")
    println("Second planet in the list: ${rockPlanetsList[1]}")
    println("Index of Earth: ${rockPlanetsList.indexOf("Earth")}")

    // Iterate through the list of rock planets
    for (planet in rockPlanetsList) {
        println("Rock Planet: $planet")
    }

    val gasPlanetsList = mutableListOf("Jupiter", "Saturn", "Uranus", "Neptune")
    gasPlanetsList.add("New Planet")
    println("Mutable Gas Planets List: $gasPlanetsList")

    // *** Sets ***
    val solarSystemSet = mutableSetOf("Mercury", "Venus", "Earth", "Mars")
    println("\nSolar System Set Size: ${solarSystemSet.size}")
    solarSystemSet.add("New Planet")
    println("Set after adding a planet: ${solarSystemSet.size}")
    println("Does the set contain Pluto? ${solarSystemSet.contains("Pluto")}")

    // *** Maps ***
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
