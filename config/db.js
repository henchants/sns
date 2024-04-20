import mongoose from "mongoose";

export const connectDB = async () => {
    await mongoose.connect('mongodb+srv://henchants:SNS@cluster0.iilpizc.mongodb.net/SNS').then(()=>console.log("DB Connected"));
}