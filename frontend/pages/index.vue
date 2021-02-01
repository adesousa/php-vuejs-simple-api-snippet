<template>
  <div class="container">
    <div>
      
      <Logo />
      <h1 class="title">
        Articles
      </h1>
      <ul v-for="article in articles.liste" :key="article">
      <li>Prix {{article.name}}: {{article.price}} €uros</li>
      </ul>
      <div class="links">
        <a
          href="https://www.coffee-meeting.com/"
          target="_blank"
          rel="noopener noreferrer"
          class="button--green"
        >
          Bonjour Paris
        </a>
        <a
          href="https://github.com/adesousa"
          target="_blank"
          rel="noopener noreferrer"
          class="button--grey"
        >
          GitHub
        </a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  async asyncData({ $axios }) {
    const articles = await $axios.$get('http://localhost:8080/index.php?value=500')
  return { articles }
}
}
</script>

<style>
.container {
  margin: 0 auto;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.title {
  font-family:
    'Quicksand',
    'Source Sans Pro',
    -apple-system,
    BlinkMacSystemFont,
    'Segoe UI',
    Roboto,
    'Helvetica Neue',
    Arial,
    sans-serif;
  display: block;
  font-weight: 300;
  font-size: 100px;
  color: #35495e;
  letter-spacing: 1px;
}

.subtitle {
  font-weight: 300;
  font-size: 42px;
  color: #526488;
  word-spacing: 5px;
  padding-bottom: 15px;
}

.links {
  padding-top: 15px;
}
</style>
