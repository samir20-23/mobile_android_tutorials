package com.example.livecoding_1

import android.content.Intent
import android.net.Uri
import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.clickable
import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.Row
import androidx.compose.foundation.layout.Spacer
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.height
import androidx.compose.foundation.layout.padding
import androidx.compose.material3.Button
import androidx.compose.material3.MaterialTheme
import androidx.compose.material3.Scaffold
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.platform.LocalContext
import androidx.compose.ui.text.font.FontWeight
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import com.example.livecoding_1.ui.theme.Livecoding_1Theme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            Livecoding_1Theme {
                Scaffold(modifier = Modifier.fillMaxSize()) { innerPadding ->
                    CarteDeVisite(
                        modifier = Modifier.padding(innerPadding)
                    )
                }
            }
        }
    }
}

@Composable
fun CarteDeVisite(modifier: Modifier = Modifier) {
    Column(
        modifier = modifier
            .fillMaxSize()
            .padding(16.dp),
        horizontalAlignment = Alignment.CenterHorizontally,
        verticalArrangement = Arrangement.Center
    ) {
        // Name and profession
        Text(
            text = "Samir",
            style = MaterialTheme.typography.titleLarge,
            modifier = Modifier.padding(bottom = 8.dp)
        )
        Text(
            text = "Développeur Android",
            style = MaterialTheme.typography.titleSmall,
            color = Color.Gray
        )
        Spacer(modifier = Modifier.height(16.dp))

        // Contact details
        val context = LocalContext.current
        ContactInfo(
            label = "Téléphone :",
            value = "+212 7 18 08 71 06",
            onClick = {
                val callIntent = Intent(Intent.ACTION_DIAL).apply {
                    data = Uri.parse("tel:+212718087106")
                }
                context.startActivity(callIntent)
            }
        )
        ContactInfo(
            label = "Email :",
            value = "aouladamarsamir@gmail.com",
            onClick = {
                val emailIntent = Intent(Intent.ACTION_SENDTO).apply {
                    data = Uri.parse("mailto:aouladamarsamir@gmail.com")
                }
                context.startActivity(emailIntent)
            }
        )
        Spacer(modifier = Modifier.height(16.dp))

        // Button to visit website
        Button(onClick = {
            val siteIntent = Intent(Intent.ACTION_VIEW).apply {
                data = Uri.parse("https://www.github.com/samir20-23")
            }
            context.startActivity(siteIntent)
        }) {
            Text("Visiter mon site")
        }
    }
}

@Composable
fun ContactInfo(label: String, value: String, onClick: () -> Unit) {
    Row(
        modifier = Modifier
            .clickable(onClick = onClick)
            .padding(vertical = 4.dp)
    ) {
        Text(text = "$label ", fontWeight = FontWeight.Bold)
        Text(text = value, color = Color.Blue)
    }
}

@Preview(showBackground = true)
@Composable
fun CarteDeVisitePreview() {
    Livecoding_1Theme {
        CarteDeVisite(modifier = Modifier)
    }
}
