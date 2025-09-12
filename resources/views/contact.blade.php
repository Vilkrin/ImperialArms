<x-layouts.main>

    <!-- Main Content -->
    <main class="pt-16">
      <section id="contact" class="py-20 bg-[hsl(var(--muted)/0.2)]">
        <div class="container mx-auto px-4">
          <!-- Section Header -->
          <div class="text-center mb-16">
            <h2 class="font-orbitron text-4xl md:text-5xl font-bold mb-6">
              <span class="text-gradient">CONTACT &</span>{' '}
              <span class="text-foreground">COMMUNICATIONS</span>
            </h2>
            <div class="w-24 h-1 bg-[hsl(var(--primary))] mx-auto mb-6" />
            <p class="text-xl text-muted-foreground max-w-3xl mx-auto font-exo">
              Establish communication with Imperial Arms command through our secure channels.
            </p>
          </div>

          <!-- Communication Channels -->
          <div class="grid lg:grid-cols-2 gap-6 mb-16">
            <!-- Discord -->
            <div class="card-imperial terminal-border">
              <div class="flex items-center justify-between mb-4">
                <div class="flex items-center space-x-4">
                  <i class="fa-solid fa-message text-accent h-8 w-8"></i>
                  <div>
                    <h3 class="font-orbitron text-xl">Discord</h3>
                    <p class="text-muted-foreground font-exo">Imperial Arms Official</p>
                  </div>
                </div>
                <div class="bg-[hsl(var(--primary)/0.2)] text-primary px-3 py-1 rounded border border-[hsl(var(--primary)/0.5)] text-xs font-orbitron">
                  PRIMARY
                </div>
              </div>
              <p class="text-foreground/90 font-exo mb-4">Primary communication hub for members and recruits. Real-time chat, voice channels, and mission coordination.</p>
              <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2 text-sm">
                  <i class="fa-solid fa-clock h-4 w-4 text-muted-foreground"></i>
                  <span class="text-muted-foreground">Response Time:</span>
                  <span class="text-foreground">24/7</span>
                </div>
                <button class="px-3 py-1.5 border border-[hsl(var(--accent)/0.5)] text-accent hover:bg-[hsl(var(--accent)/0.1)] rounded text-sm transition-colors">
                  Connect
                  <i class="fa-solid fa-external-link ml-2 h-4 w-4"></i>
                </button>
              </div>
            </div>

            <!-- Spectrum -->
            <div class="card-imperial">
              <div class="flex items-center justify-between mb-4">
                <div class="flex items-center space-x-4">
                  <i class="fa-solid fa-tower-broadcast text-primary h-8 w-8"></i>
                  <div>
                    <h3 class="font-orbitron text-xl">Spectrum</h3>
                    <p class="text-muted-foreground font-exo">IMPERIALARMSORG</p>
                  </div>
                </div>
              </div>
              <p class="text-foreground/90 font-exo mb-4">Official Star Citizen organization page and community forums.</p>
              <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2 text-sm">
                  <i class="fa-solid fa-clock h-4 w-4 text-muted-foreground"></i>
                  <span class="text-muted-foreground">Response Time:</span>
                  <span class="text-foreground">Daily</span>
                </div>
                <button class="px-3 py-1.5 border border-[hsl(var(--primary)/0.5)] text-primary hover:bg-[hsl(var(--primary)/0.1)] rounded text-sm transition-colors">
                  Connect
                  <i class="fa-solid fa-external-link ml-2 h-4 w-4"></i>
                </button>
              </div>
            </div>

            <!-- Reddit -->
            <div class="card-imperial">
              <div class="flex items-center justify-between mb-4">
                <div class="flex items-center space-x-4">
                  <i class="fa-brands fa-reddit text-destructive h-8 w-8"></i>
                  <div>
                    <h3 class="font-orbitron text-xl">Reddit</h3>
                    <p class="text-muted-foreground font-exo">r/ImperialArms</p>
                  </div>
                </div>
              </div>
              <p class="text-foreground/90 font-exo mb-4">Community discussions, recruitment posts, and general updates.</p>
              <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2 text-sm">
                  <i class="fa-solid fa-clock h-4 w-4 text-muted-foreground"></i>
                  <span class="text-muted-foreground">Response Time:</span>
                  <span class="text-foreground">Daily</span>
                </div>
                <button class="px-3 py-1.5 border border-[hsl(var(--primary)/0.5)] text-primary hover:bg-[hsl(var(--primary)/0.1)] rounded text-sm transition-colors">
                  Connect
                  <i class="fa-solid fa-external-link ml-2 h-4 w-4"></i>
                </button>
              </div>
            </div>

            <!-- Email -->
            <div class="card-imperial">
              <div class="flex items-center justify-between mb-4">
                <div class="flex items-center space-x-4">
                  <i class="fa-solid fa-envelope text-yellow-400 h-8 w-8"></i>
                  <div>
                    <h3 class="font-orbitron text-xl">Email</h3>
                    <p class="text-muted-foreground font-exo">contact@imperialarmsorg.com</p>
                  </div>
                </div>
              </div>
              <p class="text-foreground/90 font-exo mb-4">Official business inquiries and formal communications.</p>
              <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2 text-sm">
                  <i class="fa-solid fa-clock h-4 w-4 text-muted-foreground"></i>
                  <span class="text-muted-foreground">Response Time:</span>
                  <span class="text-foreground">48hr response</span>
                </div>
                <button class="px-3 py-1.5 border border-yellow-400/50 text-yellow-400 hover:bg-yellow-400/10 rounded text-sm transition-colors">
                  Connect
                  <i class="fa-solid fa-external-link ml-2 h-4 w-4"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Leadership Contact and Operating Hours -->
          <div class="grid lg:grid-cols-2 gap-12 mb-16">
            <!-- Leadership Contact -->
            <div>
              <h3 class="font-orbitron text-2xl font-bold mb-8 text-gradient">
                COMMAND STAFF
              </h3>
              <div class="space-y-4">
                <!-- Fleet Admiral -->
                <div class="card-imperial">
                  <div class="flex items-start justify-between mb-3">
                    <div>
                      <h4 class="font-orbitron text-lg font-medium">Fleet Admiral</h4>
                      <p class="text-primary font-exo">CommanderNova</p>
                    </div>
                    <div class="bg-[hsl(var(--accent)/0.2)] text-accent px-2 py-1 rounded text-xs font-orbitron">
                      ACTIVE
                    </div>
                  </div>
                  <p class="text-muted-foreground text-sm mb-2">Strategic Operations</p>
                  <div class="flex items-center space-x-2 text-sm">
                    <i class="fa-solid fa-clock h-3 w-3 text-muted-foreground"></i>
                    <span class="text-foreground">Daily 1800-2200 UTC</span>
                  </div>
                </div>

                <!-- Logistics Director -->
                <div class="card-imperial">
                  <div class="flex items-start justify-between mb-3">
                    <div>
                      <h4 class="font-orbitron text-lg font-medium">Logistics Director</h4>
                      <p class="text-primary font-exo">CargoMaster_7</p>
                    </div>
                    <div class="bg-[hsl(var(--accent)/0.2)] text-accent px-2 py-1 rounded text-xs font-orbitron">
                      ACTIVE
                    </div>
                  </div>
                  <p class="text-muted-foreground text-sm mb-2">Supply Chain & Freight</p>
                  <div class="flex items-center space-x-2 text-sm">
                    <i class="fa-solid fa-clock h-3 w-3 text-muted-foreground"></i>
                    <span class="text-foreground">Daily 1400-1800 UTC</span>
                  </div>
                </div>

                <!-- Security Chief -->
                <div class="card-imperial">
                  <div class="flex items-start justify-between mb-3">
                    <div>
                      <h4 class="font-orbitron text-lg font-medium">Security Chief</h4>
                      <p class="text-primary font-exo">TacticalEdge</p>
                    </div>
                    <div class="bg-[hsl(var(--accent)/0.2)] text-accent px-2 py-1 rounded text-xs font-orbitron">
                      ACTIVE
                    </div>
                  </div>
                  <p class="text-muted-foreground text-sm mb-2">Combat Operations</p>
                  <div class="flex items-center space-x-2 text-sm">
                    <i class="fa-solid fa-clock h-3 w-3 text-muted-foreground"></i>
                    <span class="text-foreground">Daily 2000-0000 UTC</span>
                  </div>
                </div>

                <!-- Recruitment Officer -->
                <div class="card-imperial">
                  <div class="flex items-start justify-between mb-3">
                    <div>
                      <h4 class="font-orbitron text-lg font-medium">Recruitment Officer</h4>
                      <p class="text-primary font-exo">RecruitGamma</p>
                    </div>
                    <div class="bg-[hsl(var(--accent)/0.2)] text-accent px-2 py-1 rounded text-xs font-orbitron">
                      ACTIVE
                    </div>
                  </div>
                  <p class="text-muted-foreground text-sm mb-2">New Member Processing</p>
                  <div class="flex items-center space-x-2 text-sm">
                    <i class="fa-solid fa-clock h-3 w-3 text-muted-foreground"></i>
                    <span class="text-foreground">Daily 1600-2000 UTC</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Operating Hours and Quick Contact -->
            <div>
              <h3 class="font-orbitron text-2xl font-bold mb-8 text-gradient">
                OPERATING HOURS
              </h3>
              <div class="card-imperial mb-6">
                <div class="space-y-4">
                  <div class="flex items-center justify-between py-2 border-b border-border">
                    <div class="flex items-center space-x-3">
                      <i class="fa-solid fa-map-marker h-4 w-4 text-muted-foreground"></i>
                      <span class="font-orbitron font-medium">UTC</span>
                    </div>
                    <span class="text-foreground/90 font-exo">24/7 Coverage</span>
                  </div>
                  <div class="flex items-center justify-between py-2 border-b border-border">
                    <div class="flex items-center space-x-3">
                      <i class="fa-solid fa-map-marker h-4 w-4 text-muted-foreground"></i>
                      <span class="font-orbitron font-medium">EST</span>
                    </div>
                    <span class="text-foreground/90 font-exo">Peak: 1900-2300</span>
                  </div>
                  <div class="flex items-center justify-between py-2 border-b border-border">
                    <div class="flex items-center space-x-3">
                      <i class="fa-solid fa-map-marker h-4 w-4 text-muted-foreground"></i>
                      <span class="font-orbitron font-medium">GMT</span>
                    </div>
                    <span class="text-foreground/90 font-exo">Peak: 0000-0400</span>
                  </div>
                  <div class="flex items-center justify-between py-2">
                    <div class="flex items-center space-x-3">
                      <i class="fa-solid fa-map-marker h-4 w-4 text-muted-foreground"></i>
                      <span class="font-orbitron font-medium">AEST</span>
                    </div>
                    <span class="text-foreground/90 font-exo">Peak: 1000-1400</span>
                  </div>
                </div>
                <div class="mt-6 p-4 bg-[hsl(var(--primary)/0.1)] rounded border border-[hsl(var(--primary)/0.3)]">
                  <p class="text-sm text-foreground/90 font-exo">
                    <strong class="text-primary">Note:</strong> Emergency communications and recruitment processing available 24/7 via Discord.
                  </p>
                </div>
              </div>

              <!-- Quick Contact -->
              <div class="card-imperial">
                <h3 class="font-orbitron text-lg text-gradient mb-2">
                  QUICK CONTACT
                </h3>
                <p class="text-muted-foreground font-exo mb-4">
                  For immediate assistance or urgent matters
                </p>
                <button class="btn-imperial w-full mb-4 group">
                  <i class="fa-solid fa-message mr-2 h-5 w-5"></i>
                  JOIN DISCORD NOW
                  <i class="fa-solid fa-external-link ml-2 h-4 w-4 group-hover:translate-x-1 transition-transform"></i>
                </button>
                <button class="w-full px-4 py-2 border border-[hsl(var(--primary)/0.5)] text-primary hover:bg-[hsl(var(--primary)/0.1)] rounded transition-colors">
                  <i class="fa-solid fa-tower-broadcast mr-2 h-5 w-5"></i>
                  VIEW SPECTRUM PAGE
                </button>
              </div>
            </div>
          </div>

          <!-- Footer Note -->
          <div class="text-center">
            <div class="card-imperial max-w-2xl mx-auto">
              <p class="text-muted-foreground font-exo">
                Imperial Arms operates under strict communication protocols. All official business 
                should be conducted through designated channels. For security reasons, 
                sensitive operational information is restricted to verified members only.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>

</x-layouts.main>