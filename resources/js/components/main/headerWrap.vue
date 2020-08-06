<template>
  <div class="headerWrap">
    <div class="container">
      <div class="d-none d-lg-block">
        <div class="row align-items-center">
          <div class="col-lg-2">
            <a href="#">
              <picture>
                <img src="/img/logo.png/" />
              </picture>
            </a>
          </div>
          <div class="col-lg-2 text-center">
            <select class="form-control">
              <option selected>Самара</option>
            </select>
          </div>
          <div class="col-lg-7">
            <form class="row">
              <div class="col-lg-11 p-0 ">
                <input class="form-control searchInput" placeholder="Поиск" />
              </div>
              <div class="col-lg-1 p-0">
                <button class="btn btn-info searchButton">
                  <svg
                    width="1em"
                    height="1em"
                    viewBox="0 0 16 16"
                    class="bi bi-search"
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"
                    />
                    <path
                      fill-rule="evenodd"
                      d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"
                    />
                  </svg>
                </button>
              </div>
            </form>
          </div>
          <div class="col-lg-1 text-right">
            <button class="btn btn-primary">Вход</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {

}
</script>

<style>
.headerWrap {
  background: rgb(228, 227, 227);
}
.headerWrap img {
  width: 100%;
  margin: 15px 0;
}
.searchInput{
  border-top-right-radius: 0!important;
  border-bottom-right-radius: 0!important;
  border-color: #60a8e4;
}
input:focus, select:focus{
  box-shadow: none!important;
}
.searchButton{
  border-top-left-radius: 0!important;
  border-bottom-left-radius: 0!important;
}
.searchButton:focus{
  box-shadow: none!important;
}
</style>