<!DOCTYPE html>
<html lang="en">
  @include("partial.header")
  <body>
    <!-- Navigation -->
    @include('partial.nav')
    <!-- Hero Section - No Images -->
    <x-home />
    <!-- About me -->
    <x-about />
    <!-- Skills Section -->
    <x-skill />
    <!-- Projects Section -->
    <x-project />
    <!-- resume Section -->
    <x-resume />
    <!-- Testimonials Section -->
    <!-- Contact Section -->
    <x-contact />
    <!-- Footer -->
      @include("partial.footer")
    <!-- Back to Top Button -->
    <button
      id="back-to-top"
      class="fixed bottom-6 right-6 bg-red-600 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-red-700"
    >
      <i class="fas fa-arrow-up"></i>
    </button>
  </body>
</html>
