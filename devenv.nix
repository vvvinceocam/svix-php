{ pkgs, ... }:

{
  dotenv.enable = true;
  packages = with pkgs; [
    just
    php82
    php82.packages.psysh
    php82.packages.composer
    php82.packages.phpstan
  ];
}
