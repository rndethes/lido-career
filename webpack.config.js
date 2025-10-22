const path = require("path");

module.exports = {
  // The entry point file described above
  entry: "./src/index.js",
  // The location of the build folder described above
  module: {
    rules: [
      {
        test: /\.css$/i,
        use: ["style-loader", "css-loader"],
      },
    ],
  },
  output: {
    path: path.resolve(__dirname, "assets/build/dist"),
    filename: "bundle.js",
  },
};
