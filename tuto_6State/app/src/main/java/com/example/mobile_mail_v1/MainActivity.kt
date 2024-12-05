package com.example.composeproject

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.layout.*
import androidx.compose.material3.*
import androidx.compose.runtime.*
import androidx.compose.ui.Modifier
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import kotlinx.coroutines.delay
import kotlinx.coroutines.flow.flow
import java.time.LocalTime
import java.time.format.DateTimeFormatter

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            ComposeProjectTheme {
                AppContent()
            }
        }
    }
}

@Composable
fun AppContent() {
    Scaffold(
        topBar = {
            TopAppBar(
                title = { Text("Compose Example") }
            )
        },
        content = { paddingValues ->
            Column(
                modifier = Modifier
                    .fillMaxSize()
                    .padding(paddingValues)
                    .padding(16.dp),
                verticalArrangement = Arrangement.spacedBy(16.dp)
            ) {
                CounterExample()
                Divider()
                RealTimeClock()
                Divider()
                DataStreamExample()
            }
        }
    )
}

@Composable
fun CounterExample() {
    var counter by remember { mutableStateOf(0) }

    Column(
        modifier = Modifier.fillMaxWidth(),
        verticalArrangement = Arrangement.spacedBy(8.dp)
    ) {
        Text(text = "Counter: $counter", style = MaterialTheme.typography.headlineSmall)
        Button(onClick = { counter++ }) {
            Text("Increase Counter")
        }
    }
}

@Composable
fun RealTimeClock() {
    var currentTime by remember { mutableStateOf("Loading...") }

    LaunchedEffect(Unit) {
        while (true) {
            currentTime = LocalTime.now().format(DateTimeFormatter.ofPattern("HH:mm:ss"))
            delay(1000)
        }
    }

    Column {
        Text("Real-Time Clock", style = MaterialTheme.typography.headlineSmall)
        Text(currentTime, style = MaterialTheme.typography.bodyLarge)
    }
}

@Composable
fun DataStreamExample() {
    val dataFlow = remember {
        flow {
            for (i in 1..10) {
                emit("Item $i")
                delay(1000)
            }
        }
    }

    val data by dataFlow.collectAsState(initial = "Starting...")

    Column {
        Text("Data Stream Example", style = MaterialTheme.typography.headlineSmall)
        Text(data, style = MaterialTheme.typography.bodyLarge)
    }
}

@Preview(showBackground = true)
@Composable
fun AppContentPreview() {
    ComposeProjectTheme {
        AppContent()
    }
}
