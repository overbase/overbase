cmake_minimum_required(VERSION 3.28)

project(overbase C)

include(CTest)

set(CMAKE_C_STANDARD 11)

add_subdirectory(src)
add_subdirectory(test)