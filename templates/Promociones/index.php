<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Promocione> $promociones
 */
$this->Html->css('promociones.css', ['block' => true]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Ofertas por Temporada</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <header>
            <h1><i class="fas fa-gift"></i> Generador de Ofertas por Temporada</h1>
            <p class="subtitle">Crea ofertas especiales para cada temporada con códigos promocionales únicos. Haz clic en "Generar Oferta" para crear nuevas ofertas o "Limpiar Todo" para eliminarlas.</p>
        </header>
        
        <div class="controls">
            <button id="generateOffer">
                <i class="fas fa-plus-circle"></i> Generar Oferta
            </button>
            <button id="generateMultiple" class="special-btn">
                <i class="fas fa-layer-group"></i> Generar 4 Ofertas
            </button>
            <button id="clearAll" class="delete-btn">
                <i class="fas fa-trash-alt"></i> Limpiar Todo
            </button>
        </div>
        
        <div class="offers-container" id="offersContainer">
            <!-- Las ofertas se generarán aquí -->
            <div class="empty-state" id="emptyState">
                <i class="fas fa-box-open" style="font-size: 3rem; margin-bottom: 20px; color: #bdc3c7;"></i>
                <h3>No hay ofertas generadas</h3>
                <p>Haz clic en "Generar Oferta" para crear tu primera oferta por temporada.</p>
            </div>
        </div>
        
        <footer>
            <p>Generador de ofertas por temporada - Cada código generado es único</p>
            <p>Los códigos se generan aleatoriamente y pueden copiarse haciendo clic en el botón correspondiente</p>
        </footer>
    </div>

    <script>
        // Datos para generar ofertas
        const seasons = [
            { name: "Primavera", class: "spring", icon: "fas fa-seedling" },
            { name: "Verano", class: "summer", icon: "fas fa-sun" },
            { name: "Otoño", class: "autumn", icon: "fas fa-leaf" },
            { name: "Invierno", class: "winter", icon: "fas fa-snowflake" },
            { name: "Especial", class: "special", icon: "fas fa-star" }
        ];
        
        const offerTitles = [
            "Descuento Exclusivo",
            "Oferta Flash",
            "Promoción Limitada",
            "Rebaja de Temporada",
            "Oferta Relámpago",
            "Descuento por Tiempo Limitado",
            "Promoción Especial",
            "Oferta de Última Hora"
        ];
        
        const offerDescriptions = [
            "Aprovecha esta increíble oferta disponible por tiempo limitado.",
            "No pierdas esta oportunidad única con descuentos especiales.",
            "Perfecta para prepararte para la temporada que viene.",
            "Ahorra en tus compras con esta promoción exclusiva.",
            "Oferta especial para clientes preferentes como tú.",
            "Descuento aplicable en toda nuestra gama de productos.",
            "Promoción válida hasta agotar existencias.",
            "Oferta diseñada especialmente para esta temporada."
        ];
        
        // Conjunto para almacenar códigos únicos
        const generatedCodes = new Set();
        
        // Función para generar un código numérico aleatorio único
        function generateUniqueCode() {
            let code;
            do {
                // Generar un código de 6 dígitos
                code = Math.floor(100000 + Math.random() * 900000).toString();
            } while (generatedCodes.has(code));
            
            generatedCodes.add(code);
            return code;
        }
        
        // Función para obtener un elemento aleatorio de un array
        function getRandomElement(array) {
            return array[Math.floor(Math.random() * array.length)];
        }
        
        // Función para formatear el código con separadores
        function formatCode(code) {
            // Insertar un guión cada 3 dígitos para mejor legibilidad
            return code.replace(/(\d{3})(\d{3})/, '$1-$2');
        }
        
        // Función para generar una oferta
        function generateOffer() {
            // Ocultar estado vacío si es necesario
            const emptyState = document.getElementById('emptyState');
            if (emptyState) {
                emptyState.style.display = 'none';
            }
            
            // Seleccionar temporada aleatoria
            const season = getRandomElement(seasons);
            const title = getRandomElement(offerTitles);
            const description = getRandomElement(offerDescriptions);
            const code = generateUniqueCode();
            const formattedCode = formatCode(code);
            
            // Crear la tarjeta de oferta
            const offerCard = document.createElement('div');
            offerCard.className = 'offer-card';
            
            // Fecha actual para el pie de la oferta
            const today = new Date();
            const formattedDate = today.toLocaleDateString('es-ES', {
                day: '2-digit',
                month: '2-digit',
                year: 'numeric'
            });
            
            // Crear el contenido de la tarjeta
            offerCard.innerHTML = `
                <div class="season-header ${season.class}">
                    <i class="season-icon ${season.icon}"></i>
                    ${season.name}
                </div>
                <div class="offer-content">
                    <h3 class="offer-title">${title} de ${season.name}</h3>
                    <p class="offer-description">${description}</p>
                    <div class="code-container">
                        <div>
                            <div class="code-label">CÓDIGO PROMOCIONAL:</div>
                            <div class="code-value">${formattedCode}</div>
                        </div>
                        <button class="copy-btn" data-code="${code}">
                            <i class="fas fa-copy"></i> Copiar
                        </button>
                    </div>
                </div>
                <div class="offer-footer">
                    <span>Generado el: ${formattedDate}</span>
                    <span>Código: ${code}</span>
                </div>
            `;
            
            // Agregar la tarjeta al contenedor
            document.getElementById('offersContainer').appendChild(offerCard);
            
            // Agregar evento al botón de copiar
            const copyBtn = offerCard.querySelector('.copy-btn');
            copyBtn.addEventListener('click', function() {
                const codeToCopy = this.getAttribute('data-code');
                navigator.clipboard.writeText(codeToCopy).then(() => {
                    // Cambiar temporalmente el botón para indicar que se copió
                    const originalText = this.innerHTML;
                    this.innerHTML = '<i class="fas fa-check"></i> Copiado';
                    this.style.backgroundColor = '#2ecc71';
                    
                    setTimeout(() => {
                        this.innerHTML = originalText;
                        this.style.backgroundColor = '';
                    }, 2000);
                });
            });
        }
        
        // Función para generar múltiples ofertas a la vez
        function generateMultipleOffers(count) {
            for (let i = 0; i < count; i++) {
                generateOffer();
            }
        }
        
        // Función para limpiar todas las ofertas
        function clearAllOffers() {
            const offersContainer = document.getElementById('offersContainer');
            offersContainer.innerHTML = '';
            
            // Mostrar estado vacío
            const emptyState = document.createElement('div');
            emptyState.className = 'empty-state';
            emptyState.id = 'emptyState';
            emptyState.innerHTML = `
                <i class="fas fa-box-open" style="font-size: 3rem; margin-bottom: 20px; color: #bdc3c7;"></i>
                <h3>No hay ofertas generadas</h3>
                <p>Haz clic en "Generar Oferta" para crear tu primera oferta por temporada.</p>
            `;
            
            offersContainer.appendChild(emptyState);
            
            // Limpiar el conjunto de códigos generados
            generatedCodes.clear();
        }
        
        // Event listeners para los botones
        document.getElementById('generateOffer').addEventListener('click', generateOffer);
        document.getElementById('generateMultiple').addEventListener('click', () => generateMultipleOffers(4));
        document.getElementById('clearAll').addEventListener('click', clearAllOffers);
        
        // Generar 2 ofertas al cargar la página para mostrar cómo funciona
        window.addEventListener('DOMContentLoaded', () => {
            generateMultipleOffers(2);
        });
    </script>
</body>
</html>