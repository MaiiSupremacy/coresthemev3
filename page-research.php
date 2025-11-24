<?php
/**
 * Template Name: Research Page
 *
 * @package CORES_Theme
 * @version 3.0.0
 */

get_header();
?>

<main class="page-container">
    <div class="container">
        
        <header class="page-header text-center">
            <h1 class="page-title">Research</h1>
            <p class="page-subtitle">Focus Areas, Locations, and Facilities</p>
        </header>

        <!-- 1. Research Focus (Always Visible Grid) -->
        <section class="research-focus-section">
            <h2 class="section-title">Focus Areas</h2>
            <div class="focus-grid">
                <div class="focus-card">
                    <i class="fas fa-water focus-icon"></i>
                    <h3>Coastal Dynamics</h3>
                    <p>Monitoring wave patterns, tidal currents, and sediment transport mechanisms.</p>
                </div>
                <div class="focus-card">
                    <i class="fas fa-tree focus-icon"></i>
                    <h3>Mangrove Ecosystems</h3>
                    <p>Biophysical parameterization and carbon sequestration analysis.</p>
                </div>
                <div class="focus-card">
                    <i class="fas fa-satellite focus-icon"></i>
                    <h3>Remote Sensing</h3>
                    <p>Utilization of satellite imagery and drone photogrammetry for coastal mapping.</p>
                </div>
                <div class="focus-card">
                    <i class="fas fa-laptop-code focus-icon"></i>
                    <h3>Numerical Modeling</h3>
                    <p>Simulating coastal processes to predict future shoreline changes.</p>
                </div>
            </div>
        </section>

        <!-- 2. Research Area (Map) -->
        <section class="research-map-section section-padding">
            <h2 class="section-title">Research Locations</h2>
            <div id="research-map" style="height: 500px; width: 100%; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);"></div>
            <!-- Map initialized in js/main.js -->
        </section>

        <!-- 3. Equipment -->
        <section class="equipment-section section-padding">
            <h2 class="section-title">Our Equipment</h2>
            <div class="equipment-grid">
                <div class="equipment-item">
                    <img src="https://picsum.photos/400/300?random=88" alt="Wave Gauge">
                    <h4>Wave Gauge</h4>
                    <p>High-frequency pressure sensors for wave height measurement.</p>
                </div>
                <div class="equipment-item">
                    <img src="https://picsum.photos/400/300?random=89" alt="GNSS Rover">
                    <h4>GNSS Rover</h4>
                    <p>RTK-GPS for precise topographic surveying.</p>
                </div>
                <div class="equipment-item">
                    <img src="https://picsum.photos/400/300?random=90" alt="Drone">
                    <h4>Survey Drone</h4>
                    <p>UAV for aerial photogrammetry and 3D mapping.</p>
                </div>
            </div>
        </section>

        <!-- 4. Milestones -->
        <section class="milestone-section section-padding">
            <h2 class="section-title">Milestones</h2>
            <div class="timeline">
                <!-- Dummy Milestones -->
                <div class="timeline-item">
                    <div class="timeline-date">Sep 2025</div>
                    <div class="timeline-content hover-effect">
                        <h4>Clungup Fieldwork Phase 1</h4>
                        <p>Deployment of sensors and initial sediment sampling.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">Oct 2025</div>
                    <div class="timeline-content hover-effect">
                        <h4>Data Processing Workshop</h4>
                        <p>Training on numerical modeling software.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">Dec 2025</div>
                    <div class="timeline-content hover-effect">
                        <h4>Annual Symposium</h4>
                        <p>Presentation of preliminary findings.</p>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>