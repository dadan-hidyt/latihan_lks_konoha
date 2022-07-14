<template>
  <header>
    <div id="logo">
        <router-link to="/"><img src="./assets/logo-smk.png" alt=""></router-link>
    </div>
    <div class="toggle-nav">
      <button>login</button>
    </div>
    <nav class="">
      <ul>
        <li>
          <router-link to="/">Home</router-link>
        </li>
        <li>
          <router-link to="/daftar">daftar</router-link>
        </li>
        <li>
          <router-link to="/masuk">masuk</router-link>
        </li>
      </ul>
    </nav>
  </header>
  <router-view />
</template>
<style>
@import url('./assets/style.css');
  header{
    display: flex;
    align-items: center;
    height: 80px;
    background: rgb(255, 255, 255);
    justify-content: space-around;
    box-shadow: 0px 0px 8px #dedede;
  }
  header nav ul {
    display: flex;
  }
  header nav ul li {
    list-style: none;
  }
   header nav ul li a{
    text-transform: uppercase;
    font-family: sans-serif;
    font-weight: bold;
      color: rgb(19, 19, 19);
      padding: 10px;
      text-decoration: none;
   }
   header nav ul li a:hover{
      color: rgb(10, 247, 2);
   }
   #logo img{
    width: 60px;
   }
</style>