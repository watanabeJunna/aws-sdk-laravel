<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1,minimal-ui" name="viewport">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/vue-material/dist/vue-material.min.css">
    <link rel="stylesheet" href="https://unpkg.com/vue-material/dist/theme/default.css">
    <script src="https://unpkg.com/vue"></script>
    <script src="https://unpkg.com/vue-material"></script>
    <style>
    </style>
  </head>

  <body>
    <div id="app">
        <!-- https://medium.com/codingthesmartway-com-blog/using-material-design-with-vue-js-2-a938eac53112 -->
        <md-card>
            <md-card-header>
                <div class="md-title">AWk SDK PoC</div>
                <div class="md-subhead">Service: Amazon Forecast</div>
            </md-card-header>
        </md-card>
        <template>
            <div class="datatable">
                <md-table v-model="users" md-card>
                    <md-table-toolbar>
                        <h1 class="md-title">予測データ</h1>
                    </md-table-toolbar>
                    <md-table-row slot="md-table-row" slot-scope="{ item }">
                        <md-table-cell md-label="ID" md-sort-by="id" md-numeric>@{{ item.id }}</md-table-cell>
                        <md-table-cell md-label="Name" md-sort-by="name">@{{ item.name }}</md-table-cell>
                        <md-table-cell md-label="Email" md-sort-by="email">@{{ item.email }}</md-table-cell>
                        <md-table-cell md-label="Gender" md-sort-by="gender">@{{ item.gender }}</md-table-cell>
                        <md-table-cell md-label="Job Title" md-sort-by="title">@{{ item.title }}</md-table-cell>
                    </md-table-row>
                </md-table>
            </div>
        </template>
    </div>
    <script>
        Vue.use(VueMaterial.default)

        new Vue({
            el: '#app',
            data: () => (@json($data)),
        })
    </script>
  </body>
</html>