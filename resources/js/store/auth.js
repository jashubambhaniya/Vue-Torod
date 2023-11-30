import axios from 'axios'
import router from '@/router'

export default {
    namespaced: true,
    state:{
        authenticated:false,
        user:{},
        token:''
    },
    getters:{
        authenticated(state){
            return state.authenticated
        },
        user(state){
            return state.user
        },
        token(state){
            return state.token
        }
    },
    mutations:{
        SET_AUTHENTICATED (state, value) {
            state.authenticated = value
        },
        SET_USER (state, value) {
            state.user = value
        },
        SET_TOKEN (state, value) {
            state.token = value
        }
    },
    actions:{
        login({commit},data){
			var user = data.data
			var token = data.bearer_token
			commit('SET_USER',user)
			commit('SET_TOKEN',token)
			commit('SET_AUTHENTICATED',true)
			router.push({name:'dashboard'})
        },
        logout({commit}){
            commit('SET_USER',{})
			commit('SET_TOKEN','token')
            commit('SET_AUTHENTICATED',false)
        }
    }
}