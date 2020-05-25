import { axios } from 'boot/axios'
import { log } from 'assets/utils/app-utils'

export const loadBlogData = async ({ commit, dispatch, getters }, payload) => {
  try {
    const res = await axios.get('/')
    commit('updateField', { path: 'blogPosts', value: res.data.reverse() })
  } catch (e) {
    process.env.DEV && log(e)
    throw e
  }
}

export const updateBlogPost = async ({ commit, dispatch, getters, state }, payload) => {
  try {
    const idx = state.blogPosts.findIndex(({ id }) => id === payload.id)
    state.blogPosts.splice(idx, 1, payload)
    commit('updateField', { path: 'blogPosts', value: state.blogPosts })
    axios.delete('/blogPosts/' + payload).then((res) => {
      console.log(res)
    })
  } catch (e) {
     process.env.DEV && log(e)
   }
}

export const deleteBlogPost = async ({ commit, dispatch, getters, state }, payload) => {
  try {
    const idx = state.blogPosts.findIndex(({ id }) => id === payload)
    state.blogPosts.splice(idx, 1)
    commit('updateField', { path: 'blogPosts', value: state.blogPosts })
    axios.delete('/blogPosts/' + payload).then((res) => {
      console.log(res)
    })
  } catch (e) {
    process.env.DEV && log(e)
  }
}
