const { Sequelize, QueryTypes } = require('sequelize')

const sequelize = new Sequelize('postgres://postgres:postgres@localhost:5432/trolly')

let UniqueNumber = {
    nextval: ""
}

const getUniqueSequenceNumber = async (seq = Sequelize) =>  {
    try {
        sequelize.authenticate().then(res => {
            console.log('connection success')
        })
        console.log("connection established!")
        let uQ = UniqueNumber
        uQ = await sequelize.query(`select nextval('id_inb_order_seq')`, { type: QueryTypes.SELECT })
    } catch (e) {
        console.log("error - " + e)
    }
}

getUniqueSequenceNumber()