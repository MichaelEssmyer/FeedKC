<script>
    export default {

        created() 
        {
           this.fetchFood()
        },

        data() {
            return {
                foods: []
            }
        },

        methods:
        {
           fetchFood()
           {
               axios.get('/all-food').then(({data}) => {
                  this.foods = data
               })
           }
        }
    }
</script>
