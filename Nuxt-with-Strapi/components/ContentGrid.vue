<template>
  <div class="hero">
    <div v-for="contents in content" :key="contents.id">
      <p>{{ contents.title }}</p>
      <div>Color from custom color picker:
        <p>{{ contents.color}}</p>
      </div>
      <div>Value from custom dropdown:
        <p>{{ contents.customDropdown}}</p>
      </div>
      <div v-for="zone in contents.pageZone" :key="zone.id" class="project">
   

        <!-- Display all richText here -->
        <div class="text-block sub-text" v-if="zone.__typename === 'ComponentPageComponentsTextBlock'">
          <div v-html="zone.textBlock">
          </div>
        </div>

        <!-- Displays all Quotes here -->
        <div v-if="zone.__typename === 'ComponentPageComponentsQuote'" class="quote">
          <p class="subtitle">{{ zone.quote }}</p>
          <p class="sub-text">by {{ zone.title}}</p>
        </div>

        <!-- Displays all Images -->
        <div class="images sub-text" v-if="zone.__typename === 'ComponentPageComponentsSingleImage'">
         <p>Use another provider succh as AWS-S3 or Cloudinary to display {{ zone.image.url }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  // content is query data from parent page
  // title is the page title of parent page
  props: ["content", "title"]
};
</script>

<style scoped>
.text-block{
  background-color: orange;
}
.quote{
  background-color: lightblue;
}
.images{
  background-color: lightgreen;
}
.hero {
  text-align: center;
  width: 650px;
  max-width: 100%;
  margin: 0 auto;
  padding: 1rem 0 8rem 0;
  border: 1px solid blue;
}
.sub-text {
  padding: 0 0 3rem 0;
}
.hero-subtitle p {
  margin: 0;
  padding: 0;
}
.hero-subtitle {
  font-size: 1em;
  font-weight: 400;
  line-height: 1.68;
  padding: 0;
  margin: 0;
  opacity: 0.6;
}
.subtitle {
  font-size: 1.5em;
  font-weight: 500;
  line-height: 1.68;
  padding: 0;
  margin: 0;
  opacity: 0.6;
}
.project {
  grid-column: auto / span 2;
  text-align: center;
}
@media (min-width: 920px) {
  .project {
    grid-column: auto / span 1;
  }
  .project:nth-child(3n + 1) {
    grid-column: auto / span 2;
  }
}
</style>