<template>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h2>¿Que te gustaría que agregaramos al informe?</h2>
    </div>

    <div class="panel-body">
      <form action="" v-on:submit.prevent="newEvento()">
        <div class="form-group">
          <input
            type="text"
            class="form-control"
            name="test"
            v-model="descripcion"
            required
          />
        </div>
        <br /><br />
        <h2>¿La informacion es correcta?</h2>
        <br /><br />
        <input type="radio" id="Si" value="Si" v-model="picked" name="picked" required>
        <label for="Si">Si</label>
        <br />
        <input type="radio" id="No" value="No" v-model="picked" name="picked" required/>
        <label for="No">No</label>
        <br />
        <input type="radio" id="masomenos" value="masomenos" v-model="picked" name="picked" required/>
        <label for="masomenos">Mas o menos</label>
        <br /><br />
        <h2>¿Del 1 al 5, es rápido el sitio?</h2>
        <br /><br />
        <input type="radio" id="Uno" value="Uno" v-model="picked2" name="picked2" required/>
        <label for="Uno">Uno</label>
        <br />
        <input type="radio" id="Dos" value="Dos" v-model="picked2" name="picked2" required/>
        <label for="Dos">Dos</label>
        <br />
        <input type="radio" id="Tres" value="Tres" v-model="picked2" name="picked2" required/>
        <label for="Tres">Tres</label>
        <br />
        <input type="radio" id="Cuatro" value="Cuatro" v-model="picked2" name="picked2" required/>
        <label for="Cuatro">Cuatro</label>
        <br />
        <input type="radio" id="Cinco" value="Cinco" v-model="picked2" name="picked2" required/>
        <label for="Cinco">Cinco</label>
        <br /><br />
      <button type="submit" class="btn btn-primary">Enviar informe</button>
      </form>
      
    </div>
    
  </div>
</template>

<script>
export default {
  data() {
    return {
      descripcion: "",
      picked: "",
      picked2: ""
    };
  },
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    newEvento() {
      const params = {
        descripcion: this.descripcion,
        picked: this.picked,
        picked2: this.picked2
      };
      this.description = '';
      axios.post('/test', params)
          .then((response) => {
              const test = response.data;
              this.$emit('new', test);
      });
    }
  }
};
</script>