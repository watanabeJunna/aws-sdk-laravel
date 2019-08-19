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
        <md-card>
            <md-card-header>
                <div class="md-title">AWS SDK PoC</div>
                <div class="md-subhead">Service: {{ $service }}</div>
            </md-card-header>
        </md-card>
        <template>
            <div class="datatable">
                <md-table v-model="datas" md-card>
                    <md-table-toolbar>
                        <h1 class="md-title">{{ $header }}</h1>
                    </md-table-toolbar>
                    <md-table-row slot="md-table-row" slot-scope="{ item }">
                        <!-- <md-table-cell md-label="ID" md-sort-by="id"></md-table-cell> -->
                    </md-table-row>
                </md-table>
            </div>
        </template>
    </div>
    <script>
        Vue.use(VueMaterial.default)

        new Vue({
            el: '#app',
            data: () => (@json($datas)),
        })
    </script>
  </body>
</html>