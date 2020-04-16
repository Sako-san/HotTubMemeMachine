import { axios } from 'boot/axios'
import { log } from 'assets/utils/app-utils'

const state = {
  lists: {
    blogPosts: []
  },
  entities: {
    blogPosts: {}
  }
}

const actions = {
  async loadBlogPosts ({ state, commit }) {
    if (state.lists.blogPosts.length === 0) {
      const { data } = await axios.get('/blogPosts')
      commit('updateBlogPosts')
    }
  },
  async updateBlogPosts ({ commit }, payload) {
    const { data } = payload.blogPostId
    ? await axios.put('/blogPosts/' + payload.id, payload)
    : await axios.post('/blogPosts')
    commit('updateBlogPosts')
  }

}

// getters, just using helper here
const getters = {
  blogPostSet: state => state.lists.blogPosts.map(id => state.entities.blogPosts[id])
}

// mutator, using helper
const mutations = {
}

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}
