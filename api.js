const express = require("express");
const path = require("path");
const app = express();
const router = express.Router;
app.use(express.static(path.join(__dirname, "public")));
app.get("/", (req, res) => {
  console.log("listeing");
  // res.send("hi");
  res.sendFile(path.join(__dirname, "views", "home.html"));
});
app.listen(9000);
