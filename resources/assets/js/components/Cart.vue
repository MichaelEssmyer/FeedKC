<script>
    export default {
        
        created() {
            this.fetchItems()
        },

        data() {
            return {
                cart: false,
                items: [],
            }
        },

        methods: 
        {
            fetchItems()
            {                
                axios.get(this.endpoint)
                    .then(({data}) => {
                        this.items =  data
                    })
            }
        },
        computed:
        {
            endpoint()
            {
                return '/cart'
            }
        }
    }
</script>

<style scoped>
    .cart
    {
        position: fixed;
        top: 0;
        right: 0;
        width: 300px;
        height:300px;
        background-color: #fff;
        border: 1px solid #d5d5d5;
        border-radius: 3px;
        paddding: 10px;
    }
    .item 
    {
        border: 1px solid #d5d5d5;
        padding: 5px;
        color: #333;
        padding: 10px;
        text-align:center;
    }
    .fa 
    {
        padding: 5px;
        cursor: pointer;
    }
</style>