<template>
    <div class="dropdown">
        <div class="input-group">
            <input :name="id" type="hidden" :value="idQuery" />
            <input autocomplete="off"
                type="text"
                :placeholder="placeholder"
                v-model="query"
                v-on:keyup="autoComplete"
                :name="name"
                class="form-control"
            >
            <div class="input-group-btn">
                <button type="submit" :class="buttonclass ? buttonclass : 'btn btn-default'">
                    {{ buttontext ? buttontext : 'PROCURAR' }}
                </button>
            </div>
        </div>
        <div class="dropdown-content" v-if="results.length > 0 && query.length > 0">
            <div class="dropdown-list">
                <a v-for="result in results" v-on:click="selected(result.value, result.key)">{{ result.value }}</a>
            </div>
            <a class="close-dropdown" v-on:click="fecharDrop">
                <b>FECHAR</b>
            </a>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        props:['id', 'rota', 'name','placeholder', 'buttontext', 'buttonclass'],
        data() {
            return {
                query: '',
                idQuery: '',
                results: []
            }
        },
        methods: {
            autoComplete() {
                if (this.query.length > 0) {
                    axios.get(this.rota, {params : { query: this.query }}).then((response) => {
                        this.results = Object.entries(response.data).map(([key, value]) => ({key,value}));
                    }).catch((err) => console.log(err));
                }
            },
            selected($opcaoSelecionada, $idOpcaoSelecionada) {
                this.query = $opcaoSelecionada;
                this.idQuery = $idOpcaoSelecionada;
                this.results = [];
            },
            fecharDrop() {
                this.results = [];
            }
        }
    }
</script>

<style scoped>
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: block;
        position: absolute;
        background-color: #f9f9f9;
        width: 92%;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-list {
        max-height: 200px;
        overflow-x: hidden;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content .close-dropdown {
        border-top: 1px solid lightgrey;
    }

    .dropdown-content a:hover {background-color: #f1f1f1}
</style>
